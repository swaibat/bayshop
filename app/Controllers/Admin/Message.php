<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\UserModel;

class Message extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->categories       = new CategoryModel();
        $this->countries        = new CountryModel();
        $this->user             = new UserModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET CHAT MESSAGES
    public function index()
    {
        $data = [
            'folder_name'   => 'messages',
            'page_name'     => 'messages',
            'page_title'    => 'chat messages',
        ];
        echo view('admin/index', $data);
    }

    // CREATE A NEW TYPE
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
                'status'                => $this->request->getVar('status') || '0',
                'message'               => 'type created successfully'
            ];
            $this->types->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'   => 'messages',
            'page_name'     => 'messages',
            'page_title'    => 'chat messages',
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/view', $data);
    }

}
