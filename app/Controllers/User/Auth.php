<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;



class Auth extends BaseController
{
    // USER LOGIN
    public function login()
    {

        if (isset($_POST) && !empty($_POST)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => md5($this->request->getVar('password'))
            ];
            if ($user = $this->user->where($data)->first()) {
                send_email();
                $_SESSION['user'] = user_session($this->user_agent, $user);
                return $this->res->setJSON(['status' => 200, 'message' => 'Login Successfully']);
            } else {
                return $this->res->setJSON(['status' => 400, 'message' => 'Invalid Username or Password']);
            }
        }

        $data = [
            'page_name'         => 'login',
            'page_title'        => 'User Login',
        ];
        return (isset($_SESSION['user'])) ? redirect()->to(base_url('admin/dashboard')) : view('login', $data);
    }

    // USER REGISTER
    public function register()
    {
        if ($this->validate([
            'username' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'username'              => $this->request->getVar('username'),
                'slug'                  => url_title($this->request->getVar('username')),
                'email'                 => $this->request->getVar('email'),
                'password'              => md5($this->request->getVar('password')),
            ];
            $this->user->save($data);
            return $this->res->setJSON(['status' => 201, 'message' => 'Registraton Successfully']);
        }
        $data = [
            'page_name'         => 'register',
            'page_title'        => 'Update User',
            'roles'             => $this->roles->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return (isset($_SESSION['user'])) ? redirect()->to(base_url('admin/dashboard')) : view('register', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('auth/login'));
    }
}
