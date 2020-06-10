<?php

namespace App\Controllers\payment;

require_once 'vendor/autoload.php';

use CodeIgniter\Controller;


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

    public function create()
    {

     
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
