<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Email extends BaseController
{

    // CREATE A NEW COLLECTION
    public function index()
    {
        return view("emails/order_confirmation.html");
    }

}