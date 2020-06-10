<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Paypal extends BaseConfig
{
    public $client_id = 'AWQM5WsKf2J-PnXV8GryERCiqu36isa1xY4b2kQcG0LYLbM29DmH2Ql4MuWnuV21cNsaGiy5z7jp3tWN';
    public $secret = 'EIifiXlWpI4muVzzk_IOYEOP-VxKl-RTv8ZSj-H9s8NnPGp1QEPFjRfzMipISf7logtDKdqHhquTUrw3';
    
    public $settings  = array(

        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 10000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => 'writable/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    );

}
