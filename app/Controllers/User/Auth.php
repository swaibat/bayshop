<?php

namespace App\Controllers\User;

require_once 'vendor/autoload.php';

use App\Controllers\BaseController;
use Hybridauth\Exception\Exception;
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
use Hybridauth\Storage\Session;



class Auth extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->hauth       = new \Config\Hauth();
        $this->hybridauth = new Hybridauth($this->hauth->config);
        $this->adapters  = $this->hybridauth->getConnectedAdapters();
    }

    // USER LOGIN
    public function login()
    {

        if (isset($_POST) && !empty($_POST)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => md5($this->request->getVar('password'))
            ];
            if ($user = $this->user->where($data)->first()) {
                // send_email();
                $_SESSION['user'] = user_session($user);
                return redirect()->to(base_url('admin/dashboard'));
            } else {
                return $this->res->setJSON(['status' => 400, 'message' => 'Invalid Username or Password']);
            }
        }

        $data = [
            'page_name'         => 'login',
            'page_title'        => 'User Login',
            'hybridauth'    => $this->hybridauth,
            'adapters'      => $this->adapters,
        ];
        return (isset($_SESSION['user'])) ? redirect()->to(base_url('admin/dashboard')) : view('index', $data);
    }

    public $register = [
        'username'          => 'required|is_unique[users.username]',
        'email'             => 'required|valid_email|is_unique[users.email]',
        'password'          => 'required|min_length[5]',
    ];

    public $register_errors = [
        'username'          => [
            'required'      => 'Username is required',
            'is_unique'     => 'Username already exists',
        ],
        'email'             => [
            'required'      => 'Email field is required',
            'valid_email'   => 'Invalid email Address',
            'is_unique'     => 'Email  address already taken',
        ],
        'password'          => [
            'required'      => 'Password field is required',
            'min_length[5]'    => 'A minimum of 5 characters is required',
        ]
    ];
    // USER REGISTER
    public function register()
    {
        if ($this->validate($this->register, $this->register_errors)) {
            $data = [
                'username'      => $this->request->getVar('username'),
                'slug'          => url_title($this->request->getVar('username')),
                'email'         => $this->request->getVar('email'),
                'password'      => md5($this->request->getVar('password')),
            ];
            $this->user->save($data);
            return $this->res->setJSON(['status' => 201, 'message' => 'Registraton Successfully']);
        } elseif (isset($_POST) && !empty($_POST)) {
            return $this->res->setJSON(['status' => 400, 'errors'  => $this->validation->getErrors()]);
        }
        $data = [
            'page_name'         => 'register',
            'page_title'        => 'Register',
            'roles'             => $this->roles->findAll()
        ];
        return (isset($_SESSION['user'])) ? redirect()->to(base_url('admin/dashboard')) : view('index', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('auth/login'));
    }
}
