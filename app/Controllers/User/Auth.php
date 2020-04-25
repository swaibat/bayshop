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
            $user = $this->user->where($data)->first();
            print_r($user);
            if ($user) {
                $_SESSION['user'] = user_session($this->user_agent, $user);
                // json_encode(['browser' => $user['username'], 'username' => $user['username'], 'role' => $user['role']]);
                $this->session->setFlashdata('message ', 'Login Successfully');
            } else {
                $this->session->setFlashdata('message', 'Login failed');
            }
        }

        $data = [
            'page_name'         => 'login',
            'page_title'        => 'User Login',
            'roles'             => $this->roles->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('login', $data);
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
            $_SESSION['user'] = json_encode($data);
            $this->session->setFlashdata('message', 'Registraton Successfully');
        }
        $data = [
            'page_name'         => 'register',
            'page_title'        => 'Update User',
            'roles'             => $this->roles->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('register', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
