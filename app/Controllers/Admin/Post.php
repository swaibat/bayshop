<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\UserModel;
use Config\Validation;

class Post extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->posts            = new PostModel();
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
            'folder_name'   => 'posts',
            'page_name'     => 'posts',
            'page_title'    => 'posts',
            'posts'      => $this->posts->orderBy('id', 'DESC')->findAll()
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW PRODUCT
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([])) {
            $data= [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('description'),
                'category_id'           => $this->request->getVar('category_id'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'status_code'                => 201,
                'message'               => 'user created successfully'
            ];
            $this->users->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'posts',
            'page_name'         => 'create',
            'page_title'        => 'Create Post',
            'categories'        => $this->categories->findAll(),
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
