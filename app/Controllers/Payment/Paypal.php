<?php

namespace App\Controllers\payment;

require_once 'vendor/autoload.php';

use CodeIgniter\Controller;
use App\Libraries\Template;


class Paypal extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        include_once("../Classes/PayPalMarketplace.php");

        $marketplaceHelper = new PayPalMarketplace();
    }

    public function create()
    {
        $json = file_get_contents('php://input');
        $postData = json_decode($json, true);
        header('Content-Type: application/json');
        echo json_encode($marketplaceHelper->orders->create($postData));
    }
}
