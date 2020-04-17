<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostcategoryModel;

class Postcategory extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->post_categories      = new PostcategoryModel();
        $this->session              = \Config\Services::session();
        $this->validation           = \Config\Services::validation();
    }

    // GET USERS
    public function index()
    {
        $data = [
            'folder_name'   => 'posts',
            'page_name'     => 'categories',
            'page_title'    => 'post categories',
            'post_categories'      => $this->post_categories->orderBy('id', 'ASC')->findAll()
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
                'name'                  => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'status'                => $this->request->getVar('status'),
                'status_code'           => 201,
                'message'               => 'user created successfully'

            ];
            $this->post_categories->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'posts',
            'page_name'         => 'category_create',
            'page_title'        => 'Create Post Category',
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}
