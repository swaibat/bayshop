<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\UserModel;

class User extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->categories       = new CategoryModel();
        $this->users            = new UserModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET USERS
    public function index()
    {
        $data = [
            'folder_name'   => 'users',
            'page_name'     => 'users',
            'page_title'    => 'users',
            'users'      => $this->users->orderBy('id', 'ASC')->findAll()
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
                'username'              => $this->request->getVar('username'),
                'email'                 => $this->request->getVar('email'),
                'password'              => $this->request->getVar('password'),
                'company'               => $this->request->getVar('company'),
                'role'                  => $this->request->getVar('role'),
                'phone'                 => $this->request->getVar('phone'),
                'address'               => $this->request->getVar('address'),
                'status_code'           => 201,
                'message'               => 'user created successfully'

            ];
            $this->users->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'users',
            'page_name'         => 'create',
            'page_title'        => 'Create User',
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}
