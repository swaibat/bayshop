<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Postcategory extends BaseController
{

    // GET USERS
    public function index()
    {
        $data = [
            'folder_name'   => 'posts',
            'page_name'     => 'categories',
            'page_title'    => 'post categories',
            'post_categories'      => $this->post_categories->orderBy('id', 'DESC')->findAll()
        ];
        echo view($this->backpath.'/index', $data);
    }


    // CREATE A NEW POST CATEGORY
    public function create(){
        helper(['form', 'url']);
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
            
        ])) {
            print_r($this->request->getVar('status'));
            $data = [
                'name'                  => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'status'                => $this->request->getVar('status'),
                'message'               => 'Category created successfully',
            ];
            $this->post_categories->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'posts',
            'page_name'         => 'category_create',
            'page_title'        => 'Create Post Category',
            'errors'            => $this->validation->getErrors()
        ];
        echo view($this->backpath.'/view', $data);
    }
}
