<?php

namespace App\Controllers\payment;

require_once 'vendor/autoload.php';

use CodeIgniter\Controller;
use App\Libraries\Paypal\Helpers\PayPalHelper;
use App\Models\PaypalModel;
use App\Models\AddressModel;

class Paypal extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->payments         = new PaypalModel();
        $this->address          = new AddressModel();
        $this->config           = new \Config\Paypal();
        $this->paypalHelper     = new PayPalHelper();
        $this->themePath        = 'themes/default/index';
    }
    public $_api_context;

    public function createOrder()
    {
        $randNo= (string)rand(10000,20000);
        $orderData = array(
            'intent' => 'CAPTURE',
            'application_context' =>
                array(
                    'return_url' => 'https://example.com/return',
                    'cancel_url' => 'https://example.com/cancel',
                    'brand_name' => 'EXAMPLE INC',
                    'locale' => 'en-US',
                    'landing_page' => 'BILLING',
                    'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                    'user_action' => 'PAY_NOW',
                ),
            'purchase_units' =>
                array(
                    0 =>
                        array(
                            'reference_id' => 'PUHF',
                            'description' => 'Sporting Goods',
                            'custom_id' => 'CUST-HighFashions',
                            'soft_descriptor' => 'HighFashions',
                            'amount' =>
                                array(
                                    'currency_code' => 'USD',
                                    'value' => '220.00',
                                    'breakdown' =>
                                        array(
                                            'item_total' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '180.00',
                                                ),
                                            'shipping' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '20.00',
                                                ),
                                            'handling' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '10.00',
                                                ),
                                            'tax_total' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '20.00',
                                                ),
                                            'shipping_discount' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '10.00',
                                                ),
                                        ),
                                ),
                            'items' =>
                                array(
                                    0 =>
                                        array(
                                            'name' => 'T-Shirt',
                                            'description' => 'Green XL',
                                            'sku' => 'sku01',
                                            'unit_amount' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '90.00',
                                                ),
                                            'tax' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '10.00',
                                                ),
                                            'quantity' => '1',
                                            'category' => 'PHYSICAL_GOODS',
                                        ),
                                    1 =>
                                        array(
                                            'name' => 'Shoes',
                                            'description' => 'Running, Size 10.5',
                                            'sku' => 'sku02',
                                            'unit_amount' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '45.00',
                                                ),
                                            'tax' =>
                                                array(
                                                    'currency_code' => 'USD',
                                                    'value' => '5.00',
                                                ),
                                            'quantity' => '2',
                                            'category' => 'PHYSICAL_GOODS',
                                        ),
                                ),
                            'shipping' =>
                                array(
                                    'method' => 'United States Postal Service',
                                    'name' =>
                                        array(
                                            'full_name' => 'John Doe',
                                        ),
                                    'address' =>
                                        array(
                                            'address_line_1' => '123 Townsend St',
                                            'address_line_2' => 'Floor 6',
                                            'admin_area_2' => 'San Francisco',
                                            'admin_area_1' => 'CA',
                                            'postal_code' => '94107',
                                            'country_code' => 'US',
                                        ),
                                ),
                        ),
                ),
        );

        header('Content-Type: application/json');
        echo json_encode($this->paypalHelper->orderCreate($orderData));
    }

    public function captureOrder(){
        $order = $this->paypalHelper->orderCapture()['data'];
        $address = [
            'user_id'           =>'1',
            'contact_names'     => $order['purchase_units'][0]['shipping']['name']['full_name'],
            'address_line_1'    => $order['purchase_units'][0]['shipping']['address']['address_line_1'],
            'address_line_2'    => $order['purchase_units'][0]['shipping']['address']['address_line_2'],
            'admin_area_2'      => $order['purchase_units'][0]['shipping']['address']['admin_area_2'],
            'admin_area_1'      => $order['purchase_units'][0]['shipping']['address']['admin_area_1'],
            'postal_code'       => $order['purchase_units'][0]['shipping']['address']['postal_code'],
            'country_code'      => $order['purchase_units'][0]['shipping']['address']['country_code'],
        ];
        $this->address->save($address);
        $payment = [
            'txn_id'            =>$order['id'],
            'user_id'           =>'1',
            'payment_method'    =>'paypal',
            'payer_email'       =>$order['payer']['email_address'],
            'amount'            =>$order['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
            'currency_code'     =>$order['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
            'payment_status'    =>$order['status'],
            'address_id'        =>$this->address->insertID(),
            'created_at'        =>$order['purchase_units'][0]['payments']['captures'][0]['create_time'],
            'updated_at'        =>$order['purchase_units'][0]['payments']['captures'][0]['update_time']
        ];
        $this->payments->save($payment);
        $_SESSION['order']=[$address,$payment];
        return $this->response->setJSON(['status' => 201, 'message' => 'Order created successfully']);
    }

    public function success(){
        $data =[
            'page_name' => 'payment_success',
            'page_title' => 'payment success'
        ];
        return view($this->themePath, $data);
    }
}
