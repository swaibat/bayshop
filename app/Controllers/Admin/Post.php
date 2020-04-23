<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Post extends BaseController
{

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


    // CREATE A NEW POST
    public function create(){
        helper(['form', 'url']);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data= [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('content'),
                'category_id'           => $this->request->getVar('category_id'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'post created successfully'
            ];
            $this->posts->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'posts',
            'page_name'         => 'create',
            'page_title'        => 'Create Post',
            'errors'            => $this->validation->getErrors(),
            'users'             => $this->users->findAll(),
            'post_categories'   => $this->post_categories->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/index', $data);
    }

    // CREATE A NEW POST
    public function update(){
        helper(['form', 'url']);
        $id                = $this->request->uri->getSegment(3);
        if ($this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data= [
                'title'                 => $this->request->getVar('title'),
                'slug'                  => url_title($this->request->getVar('title')),
                'content'               => $this->request->getVar('content'),
                'category_id'           => $this->request->getVar('category_id'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'focus_keyword'         => $this->request->getVar('focus_keyword'),
                'meta_description'      => $this->request->getVar('meta_description'),
                'message'               => 'post Updated successfully'
            ];
            $this->posts->update($id, $data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'posts',
            'page_name'         => 'update',
            'page_title'        => 'Update Post',
            'errors'            => $this->validation->getErrors(),
            'post'              => $this->posts->find($id),
            'users'             => $this->users->findAll(),
            'post_categories'   => $this->post_categories->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/index', $data);
    }

}
