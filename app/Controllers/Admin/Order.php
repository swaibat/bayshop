<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{

    // GET payments
    public function index()
    {
        $data = [
            'folder_name'   => 'orders',
            'page_name'     => 'orders',
            'page_title'    => 'orders',
            'payments'      => $this->payments->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }

}
