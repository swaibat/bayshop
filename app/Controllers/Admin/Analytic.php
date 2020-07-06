<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Analytic extends BaseController{

    // GET COUNTRIES
    public function index()
    {
        $data = [
            'folder_name'   => 'analytics',
            'page_name'     => 'index',
            'page_title'    => 'Analytics & Mornitoring',
        ];
        echo view('admin/index', $data);
    }
}
