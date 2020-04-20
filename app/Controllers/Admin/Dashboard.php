<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;

class Dashboard extends Controller
{
    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products         = new ProductModel();
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }


    // GET CATEGORIES
    public function index()
    {
        $data = [
            'folder_name'   => 'dashboard',
            'page_name'     => 'dashboard',
            'page_title'    => 'Dashboard',
        ];
        echo view('admin/index', $data);
    }
}
