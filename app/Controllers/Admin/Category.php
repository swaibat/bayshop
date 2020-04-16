<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\ProductTypeModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;

class Category extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products         = new ProductModel();
        $this->product_types    = new ProductTypeModel();
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->validation       = \Config\Services::validation();
    }


    // GET CATEGORIES
    public function index()
    {
        $data = [
            'folder_name'   => 'categories',
            'page_name'     => 'category',
            'page_title'    => 'categories',
            'categories'    => $this->categories->findAll(),
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW CATEGORY
    public function create(){
        helper(['form','url']);
        if (isset($_POST) && !empty($_POST)) {
            $this->categories->save([
                'name'          => $this->request->getVar('name'),
                'slug'          => url_title($this->request->getVar('slug')),
                'status'        => $this->request->getVar('status'),
                'type'          => $this->request->getVar('type'),
                'created_at'    => $this->request->getVar('created_at'),

            ]);
            return redirect()->to('/admin/categories');
        }

        $data = [
            'folder_name'       => 'categories',
            'page_name'         => 'create',
            'page_title'        => 'Add New Category',
            'categories'        => $this->categories->findAll(),
            'types'             => $this->product_types->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}
