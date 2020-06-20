<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Monitoring extends BaseController{

    // GET Mornitor
    public function index()
    {
        $data = [
            'folder_name'   => 'monitoring',
            'page_name'     => 'index',
            'page_title'    => 'monitoring',
        ];
        echo view('admin/index', $data);
    }
}
