<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PageModel;
use App\Models\UserModel;

class Page extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->pages            = new PageModel();
        $this->user             = new UserModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET POSTS
    public function index()
    {
        $data = [
            'folder_name'   => 'pages',
            'page_name'     => 'pages',
            'page_title'    => 'pages',
            'pages'         => $this->pages->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('content'),
                'location_nav'          => $this->request->getVar('location_nav'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'page created successfully'
            ];
            $this->pages->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'pages',
            'page_name'         => 'create',
            'page_title'        => 'Create Page',
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }

    // CREATE A NEW PRODUCT
    public function update($id){
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('content'),
                'location_nav'          => $this->request->getVar('location_nav'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'page Updated successfully'
            ];
            $this->pages->update($id, $data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'pages',
            'page_name'         => 'update',
            'page_title'        => 'Update Page',
            'id'                => $this->request->uri->getSegment(3),
            'page'              => $this->pages->find($id),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }
}
