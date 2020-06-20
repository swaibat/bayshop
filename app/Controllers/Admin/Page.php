<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Page extends BaseController
{
    // GET PAGES
    public function index()
    {
        $data = [
            'folder_name'   => 'pages',
            'page_name'     => 'pages',
            'page_title'    => 'pages',
        ];
        if($this->admin_user){
            $data['pages'] = $this->pages->orderBy('id', 'DESC')->findAll();
        }else{
            $data['pages'] = $this->pages->orderBy('id', 'DESC')->where('vendor_id', $this->user_data['id'])->findAll();
        } 
        return view($this->backpath.'/index', $data);
    }


    // CREATE A NEW PAGE
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
                'vendor_id'             => $this->user_data['id'],
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
        return view($this->backpath.'/index', $data);
    }

    // UPDATE PAGE
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
                'vendor_id'             => $this->user_data['id'],
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
        return view($this->backpath.'/index', $data);
    }
}
