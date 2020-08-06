<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class Install extends Controller
{
    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper(['form', 'url', 'html', 'inflector']);
        $this->session = \Config\Services::session();
        
    }
    public $database_validation = [
        'hostname' => 'required|string',
        'database' => 'required|string',
        'username' => 'required|string',
        'password' => 'string',
    ];

    public function index()
    {
        // return print_r('hello');
        if (isset($_GET['installation']) && strpos(file_get_contents('.env'),"Install")) {
            $this->session->set('setup', 'installation');
            if (isset($_POST) && !empty($_POST)) {
                // return print_r($_POST);
                $env = file_get_contents('.env');
                $new = str_replace("%hostname%", $this->request->getVar('hostname'), $env);
                $new = str_replace("%username%", $this->request->getVar('username'), $new);
                $new = str_replace("%password%", $this->request->getVar('password'), $new);
                $new = str_replace("%database%", $this->request->getVar('database'), $new);

                file_exists(".env") && file_put_contents(".env", $new);
                // $migrate = \Config\Services::migrations();
                // $migrate->latest();
                return $this->response->setJSON(['status' => 201, 'message' => 'database Created Successfully']);
                // return redirect()->to(base_url('/setup?site'));

            }
            return view('install/install');
        }
        if (isset($_GET['site']) && file_exists(".env") && isset($_SESSION['setup']) && !strpos(file_get_contents('.env'),"%hostname%")) {
            if (isset($_POST) && !empty($_POST)) {
                // return print_r($_POST);
                $data = [
                    'name' => $this->request->getVar('username'),
                    'slug' => url_title($this->request->getVar('username')),
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => md5($this->request->getVar('password')),
                    'role' => 1,
                ];
                // if($this->request->getVar('add_data')){
                //     $seeder = \Config\Database::seeder();
                //     $seeder->call('CategorySeeder');
                //     $this->call('Database\Seeds\CategorySeeder');
                // }
                $env = file_get_contents('.env');
                $new = str_replace("%base_url%", $this->request->getVar('site_url'), $env);
                $new = str_replace("# app.baseURL", 'app.baseURL', $new);
                $new = str_replace("Install", 'Home', $new);
                file_put_contents(".env", $new);
                $this->user->save($data);
                $this->session->destroy();
                return $this->response->setJSON(['status'=>201,'message'=>'user created successfully']);
            }
            return view('install/site');
        }else{
            return print_r(isset($_GET['site']));
        }
        if (isset($_GET['complete']) && file_exists(".env") && isset($_SESSION['install']) && strpos(file_get_contents('.env'),"Home")) {
            if (isset($_POST) && !empty($_POST)) {
                // return print_r($_POST);
                $data = [
                    'name' => $this->request->getVar('username'),
                    'slug' => url_title($this->request->getVar('username')),
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => md5($this->request->getVar('password')),
                    'role' => 1,
                ];
                if($this->request->getVar('add_data')){
                    $seeder = \Config\Database::seeder();
                    $seeder->call('CategorySeeder');
                    $this->call('Database\Seeds\CategorySeeder');
                }
                $env = file_get_contents('.env');
                $new = str_replace("%base_url%", $this->request->getVar('site_url'), $env);
                $new = str_replace("# app.baseURL", 'app.baseURL', $new);
                $new = str_replace("Install", 'Home', $new);
                file_put_contents(".env", $new);
                $this->user->save($data);
                unset($_SESSION['install']);
                return $this->response->setJSON(['status'=>201,'message'=>'user created successfully']);
            }
            return view('install/complete');
        }else{
            return redirect()->to('/');
        }
        return view('install/index');
    }

    //--------------------------------------------------------------------

}
