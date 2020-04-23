<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController{
    
    // GET CATEGORIES
    public function index()
    {
        $data = [
            'folder_name'   => 'categories',
            'page_name'     => 'category',
            'page_title'    => 'categories',
            'categories'    => $this->categories->findAll(),
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW CATEGORY
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            printf($this->request->getVar('name'));
            $data = [
                'name'          => $this->request->getVar('name'),
                'slug'          => url_title($this->request->getVar('name')),
                'status'        => $this->request->getVar('status'),
                'type'          => $this->request->getVar('type'),
                'message'       => 'Category created successfully'
            ];
            $this->categories->save($data);
            return $this->response->setJSON($data);
            return view('admin/view', $data);
        }

        $data = [
            'folder_name'       => 'categories',
            'page_name'         => 'create',
            'page_title'        => 'Add New Category',
            'categories'        => $this->categories->findAll(),
            'types'             => $this->types->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}
