<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\TypeModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;

class Setting extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->products         = new ProductModel();
        $this->types            = new TypeModel();
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // SETTINGS
    public function index()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'price'                 => $this->request->getVar('price'),
                'compare_price'         => $this->request->getVar('compare_price'),
                'available_quantity'    => $this->request->getVar('available_quantity'),
                'product_type'          => $this->request->getVar('product_type'),
                'description'           => $this->request->getVar('description'),
                'vendor'                => $this->request->getVar('vendor'),
                'country'               => $this->request->getVar('country'),
                'category'              => $this->request->getVar('category'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'product created successfully'
            ];
            $this->products->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'settings',
            'page_name'         => 'settings',
            'page_title'        => 'Create Product',
            'types'             => $this->types->findAll(),
            'categories'        => $this->categories->findAll(),
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }
}
