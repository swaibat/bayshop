<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\UserModel;

class Country extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->user             = new UserModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET POSTS
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
