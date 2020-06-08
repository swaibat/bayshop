<?php

namespace App\Controllers\payment;

require_once 'vendor/autoload.php';

use CodeIgniter\Controller;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use App\Models\PaypalModel;
use PayPal\Api\PaymentExecution;


class Paypal extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->session          = \Config\Services::session();
        $this->paypal       = new PaypalModel();
        $this->config       = new \Config\Paypal();
        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $this->config->client_id,
                $this->config->secret
            )
        );
    }
    public $_api_context;


    public function index()
    {
        return view('content/payment_credit_form');
    }


    public function create()
    {

        // setup PayPal api context
        $this->_api_context->setConfig($this->config->settings);


        // ### Payer
        // A resource representing a Payer that funds a payment
        // For direct credit card payments, set payment method
        // to 'credit_card' and add an array of funding instruments.
        // if(isset($_SESSION['cart'])){
        //     foreach ($_SESSION['cart'] as $key => $value) {
        //         $item = new Item();
        //         $item->setName($value['title'])
        //         ->setCurrency('USD')
        //         ->setQuantity($value['qty'])
        //         ->setSku($value['id']) // Similar to `item_number` in Classic API
        //         ->setPrice($value['price']);
        //         $items[]=$item;
        //     }
        // }

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $Subtotal = 0;
        $item = new Item();
        if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key => $value) {
                $Subtotal += (float)($value['price']) * (int)($value['qty']);
                $item->setName($value['title'])
                ->setCurrency('USD')
                ->setQuantity($value['qty'])
                ->setSku($value['id']) // Similar to `item_number` in Classic API
                ->setPrice($value['price']);
                $items[]=$item;
            }
        }
        // return print_r($Subtotal);
        $itemList = new ItemList();
        $itemList->setItems($items);
        // return print_r($itemList);

        $details = new Details();
        $details->setSubtotal($Subtotal);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($Subtotal)
            ->setDetails($details);
        print_r($amount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(base_url('payments/paypal/status?success=true'))
            ->setCancelUrl(base_url('payments/paypal/status?success=false'));


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($this->_api_context);
        } catch (\Exception $ex) {
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message 
            die($ex->getMessage());
        }

        $approvalUrl = $payment->getApprovalLink();
        // return print_r($itemList);
        return redirect()->to($approvalUrl);
    }


    public function status()
    {

        // paypal credentials

        /** Get the payment ID before session clear **/
        $payment_id = $this->request->getVar("paymentId");
        $PayerID = $this->request->getVar("PayerID");
        $token = $this->request->getVar("token");
        /** clear the session payment ID **/

        if (empty($PayerID) || empty($token)) {
            $this->session->set('success_msg', 'Payment failed');
            redirect('paypal/index');
        }

        $payment = Payment::get($payment_id, $this->_api_context);


        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId($this->request->getVar('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);



        //  DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $trans = $result->getTransactions();

            // item info
            $Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
            $Tax = $trans[0]->getAmount()->getDetails()->getTax();

            $payer = $result->getPayer();
            // payer info //
            $PaymentMethod = $payer->getPaymentMethod();
            $PayerStatus = $payer->getStatus();
            $PayerMail = $payer->getPayerInfo()->getEmail();

            $relatedResources = $trans[0]->getRelatedResources();
            $sale = $relatedResources[0]->getSale();
            // sale info //
            $saleId = $sale->getId();
            $CreateTime = $sale->getCreateTime();
            $UpdateTime = $sale->getUpdateTime();
            $State = $sale->getState();
            $Total = $sale->getAmount()->getTotal();
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            $data = [
                'total'             =>$Total,
                'sub_total'         =>$Subtotal,
                'tax'               =>$Tax,
                'payment_method'    => $PaymentMethod,
                'payer_status'      =>$PayerStatus,
                'payer_email'       => $PayerMail,
                'sale_id'           =>$saleId, 
                'created_at'        =>$CreateTime,
                'updated_at'        => $UpdateTime, 
                'payment_status'    =>$State
            ];
            $this->paypal->save($data);
            return redirect()->to('success');
        }
        return redirect()->to('cancel');
    }
    function success()
    {
        return view("content/success");
    }
    function cancel()
    {
        $this->paypal->create_payment();
        return view("content/cancel");
    }
}
