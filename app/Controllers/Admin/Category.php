<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController
{
    // CATEGORY VALIDATION
    public $category = [
        'name'              => 'required|is_unique[categories.name]|min_length[3]',
    ];

    public $category_errors = [
        'name'              => [
            'required'      => 'category name is required',
            'is_unique'     => 'category name already exists',
        ]
    ];

    // GET CATEGORIES
    public function index(){
        $data = [
            'folder_name'       => 'categories',
            'page_name'         => 'category',
            'page_title'        => 'categories',
            'categories'        => $this->categories->findAll(),
            'types'             => $this->types->findAll(),
        ];
        echo view('admin/index', $data);
    }


    // CREATE A NEW CATEGORY
    public function create(){
        if ($this->validate($this->category, $this->category_errors)) {
            $data = [
                'name'          => $this->request->getVar('name'),
                'slug'          => url_title($this->request->getVar('name')),
                'status'        => $this->request->getVar('status'),
                'type'          => $this->request->getVar('type'),
                'message'       => 'Category created successfully'
            ];
            $this->categories->save($data);
            return $this->res->setJSON(['status' => 201, 'message' => 'Category Created Successfully']);
        } elseif (isset($_POST) && !empty($_POST)) {
            return $this->res->setJSON(['status' => 400, 'errors'  => $this->validation->getErrors()]);
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

    // CREATE A NEW CATEGORY
    public function update(){
        $id = $this->request->uri->getSegment(3);
        if ($this->validate($this->category, $this->category_errors)) {
            $data = [
                'name'          => $this->request->getVar('name'),
                'slug'          => url_title($this->request->getVar('name')),
                'status'        => $this->request->getVar('status'),
                'type'          => $this->request->getVar('type'),
                'message'       => 'Category updated successfully'
            ];
            $this->categories->update($id, $data);
            return $this->res->setJSON(['status' => 200, 'message' => 'Category updated Successfully']);
        } elseif (isset($_POST) && !empty($_POST)) {
            return $this->res->setJSON(['status' => 400, 'errors'  => $this->validation->getErrors()]);
        }
        $data = [
            'folder_name'       => 'categories',
            'page_name'         => 'update',
            'page_title'        => 'Update Category',
            'category'          => $this->categories->find($id),
            'categories'        => $this->categories->findAll(),
            'errors'            => $this->validation->getErrors()
        ];
        return view('admin/view', $data);
    }
}
