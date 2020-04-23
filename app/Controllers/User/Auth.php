<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;


class Auth extends BaseController
{
    // CREATE A NEW PRODUCT
    public function login(){
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
    public function register(){
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
                'phone'                 => $this->request->getVar('phone'),
                'address'               => $this->request->getVar('address'),
                'message'               => 'User updated successfully'
            ];
            $this->users->save($data);
            return $this->response->setJSON(json_decode($data));
        }
        $data = [
            'folder_name'       => 'users',
            'page_name'         => 'update',
            'page_title'        => 'Update User',
            'roles'             => $this->roles->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }

    public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
}
