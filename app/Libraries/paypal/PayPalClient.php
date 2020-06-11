<?php

namespace App\Libraries\Paypal;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment which has access
     * credentials context. This can be used invoke PayPal API's provided the
     * credentials have the access to do so.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }
    
    /**
     * Setting up and Returns PayPal SDK environment with PayPal Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * ProductionEnvironment.
     */
    public static function environment()
    {
        $clientId = getenv("CLIENT_ID") ?: "AWQM5WsKf2J-PnXV8GryERCiqu36isa1xY4b2kQcG0LYLbM29DmH2Ql4MuWnuV21cNsaGiy5z7jp3tWN";
        $clientSecret = getenv("CLIENT_SECRET") ?: "EIifiXlWpI4muVzzk_IOYEOP-VxKl-RTv8ZSj-H9s8NnPGp1QEPFjRfzMipISf7logtDKdqHhquTUrw3";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
