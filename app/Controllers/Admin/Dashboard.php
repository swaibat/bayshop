<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    // Dashboard
    public function index()
    {
        $data = [
            'folder_name'       => 'dashboard',
            'page_name'         => 'dashboard',
            'page_title'        => 'Dashboard',
            'total_users'       => count($this->user->findAll()),
            'total_products'    => count($this->products->findAll()),
        ];
        echo view('admin/index', $data);
    }
}
