<?php

namespace App\Controllers\payment;

require_once(APPPATH . 'libraries/paypal-php-sdk/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files

use CodeIgniter\Controller;
use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use App\Models\PaypalModel;


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

        $payer['payment_method'] = 'paypal';

        // ### Itemized information
        // (Optional) Lets you specify item wise
        // information
        $data = [
            "name" => $this->request->getVar('name'),
            "sku" => $this->request->getVar('item_number'),  // Similar to `item_number` in Classic API
            "description" => $this->request->getVar('item_description'),
            "currency" => "USD",
            "quantity" => 1,
            "price" => $this->request->getVar('item_price'),
        ];


        $itemList = new ItemList();
        $itemList->setItems(array($data));

        // ### Additional payment details
        // Use this optional field to set additional
        // payment information such as tax, shipping
        // charges etc.
        $details['tax'] = $this->request->getVar('details_tax');
        $details['subtotal'] = $this->request->getVar('details_subtotal');
        // ### Amount
        // Lets you specify a payment amount.
        // You can also specify additional details
        // such as shipping, tax.
        $amount['currency'] = "USD";
        $amount['total'] = $details['tax'] + $details['subtotal'];
        $amount['details'] = $details;
        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it.
        $transaction['description'] = 'Payment description';
        $transaction['amount'] = $amount;
        $transaction['invoice_number'] = uniqid();
        $transaction['item_list'] = $itemList;

        // ### Redirect urls
        // Set the urls that the buyer must be redirected to after
        // payment approval/ cancellation.
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl( "http://localhost:8888/payments/paypal/status/")
            ->setCancelUrl("http://localhost:8888/payments/paypal/status/");

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent set to sale 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\Exception $ex) {
            die($ex->getMessage());
            exit(1);
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            redirect($redirect_url);
        }

        $this->session->set_flashdata('success_msg', 'Unknown error occurred');
        redirect('paypal/index');
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
            $this->paypal->create($Total, $Subtotal, $Tax, $PaymentMethod, $PayerStatus, $PayerMail, $saleId, $CreateTime, $UpdateTime, $State);
            $this->session->set_flashdata('success_msg', 'Payment success');
            redirect('paypal/success');
        }
        $this->session->set_flashdata('success_msg', 'Payment failed');
        redirect('paypal/cancel');
    }
    function success()
    {
        $this->load->view("content/success");
    }
    function cancel()
    {
        $this->paypal->create_payment();
        $this->load->view("content/cancel");
    }
}
