<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\UserModel;

class Country extends Controller
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

    // GET POSTS
    public function index()
    {
        $data = [
            'folder_name'   => 'countries',
            'page_name'     => 'countries',
            'page_title'    => 'countries',
            'countries'      => $this->countries->orderBy('name', 'ASC')->findAll()
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([])) {
            $this->countries->save([
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('description'),
                'category_id'           => $this->request->getVar('category_id'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
            ]);
            return $this->session->setFlashdata('msg', 'product created successfully');
        }
        $data = [
            'folder_name'       => 'countries',
            'page_name'         => 'create',
            'page_title'        => 'Create Country',
            'countries'         => $this->countries->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/index', $data);
    }

    public function get_username($id)
    {
        $user = $this->products->find($id);
		foreach ($user as $row)
			return $row['name'];
    }

}
