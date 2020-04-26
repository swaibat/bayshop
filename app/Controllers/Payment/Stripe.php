<?php namespace App\Controllers\Payment;

use App\Controllers\BaseController;

class Stripe extends BaseController{
     
    public function index()
    {
        return view('stripe/index');
    }
        
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function payment()
    {
      require_once('application/libraries/stripe-php/init.php');
     
      $stripeSecret = 'sk_test_j5k0976GOLSOtiRzbDLpKqat00og5iM3cY';
 
      \Stripe\Stripe::setApiKey($stripeSecret);
      
        $stripe = \Stripe\Charge::create ([
                "amount" => $this->input->post('amount'),
                "currency" => "usd",
                "source" => $this->input->post('tokenId'),
                "description" => "Test payment from tutsmake.com."
        ]);
             
       // after successfull payment, you can store payment related information into your database
              
        $data = array('success' => true, 'data'=> $stripe);
 
        echo json_encode($data);
    }
}
