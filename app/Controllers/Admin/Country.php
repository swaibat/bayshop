<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Country extends BaseController{

    // GET COUNTRIES
    public function index()
    {
        $data = [
            'folder_name'   => 'countries',
            'page_name'     => 'countries',
            'page_title'    => 'countries',
            'countries'      => $this->countries->orderBy('name', 'ASC')->findAll()
        ];
        echo view('admin/index', $data);
    }
}
