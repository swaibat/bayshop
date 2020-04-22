<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\UserModel;
use App\Models\RoleModel;

class User extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->categories       = new CategoryModel();
        $this->users            = new UserModel();
        $this->roles            = new RoleModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
        $this->email            = \Config\Services::email();
    }

    // GET USERS
    public function index()
    {
        $data = [
            'folder_name'   => 'users',
            'page_name'     => 'users',
            'page_title'    => 'users',
            'users'      => $this->users->orderBy('id', 'DESC')->findAll()
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
            'roles'             => $this->roles->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }

    // UPDATE PRODUCT
    public function update($id)
    {
        helper(['form', 'url']);
        $id                = $this->request->uri->getSegment(3);
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
                'message'               => 'User updated successfully'

            ];
            if ($imagefile = $this->request->getFiles()) {
                foreach ($imagefile['images'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        $newName = $img->getRandomName();
                        $img->move(WRITEPATH . 'uploads', $newName);
                    }
                }
            }
            $this->users->update($id, $data);
            return $this->response->setJSON(json_decode($data));
        }
        $data = [
            'folder_name'       => 'users',
            'page_name'         => 'update',
            'page_title'        => 'Update User',
            'id'                => $this->request->uri->getSegment(3),
            'roles'             => $this->roles->findAll(),
            'user'              => $this->users->find($id),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}
