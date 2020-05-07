<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use PHPUnit\Util\Json;

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
            'user_agents'       => $this->products->findAll(),
        ];
        echo view('admin/index', $data);
    }
}
