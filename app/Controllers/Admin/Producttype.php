<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductTypeModel;

class Producttype extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->product_types    = new ProductTypeModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }


    // GET CATEGORIES
    public function index()
    {
        $data = [
            'folder_name'   => 'products',
            'page_name'     => 'types',
            'page_title'    => 'product types',
            'types'      => $this->product_types->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }

    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                 => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'location'              => $this->request->getVar('location'),
                'status'                => $this->request->getVar('status'),
                'message'               => 'type created successfully'
            ];
            $this->product_types->save($data);
            return $this->response->setJSON($data);
            return view('admin/view', $data);
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'type_create',
            'page_title'        => 'Create Product Type',
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/view', $data);
    }
}
