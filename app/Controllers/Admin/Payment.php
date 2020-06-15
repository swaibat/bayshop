<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Payment extends BaseController
{

    // GET payments
    public function index()
    {
        $data = [
            'folder_name'   => 'payments',
            'page_name'     => 'payments',
            'page_title'    => 'payments',
            'payments'      => $this->payments->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }

}
