<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SliderModel;


class Slider extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->slider           = new SliderModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET POSTS
    public function index()
    {
        $data = [
            'folder_name'   => 'sliders',
            'page_name'     => 'sliders',
            'page_title'    => 'sliders',
            'sliders'      => $this->slider->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW POST
    public function create(){
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data= [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'description'           => $this->request->getVar('description'),
                'product_link'          => $this->request->getVar('product_link'),
                'image_link'            => $this->request->getVar('image_link'),
                'status'                => $this->request->getVar('status'),
                'btn_text'              => $this->request->getVar('btn_text'),
                'order'                 => $this->request->getVar('order'),
                'message'               => 'post created successfully'
            ];
            $this->posts->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'sliders',
            'page_name'         => 'create',
            'page_title'        => 'Create slide',
            'errors'            => $this->validation->getErrors(),
        ];
        return view('admin/index', $data);
    }

}
