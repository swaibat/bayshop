<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Type extends BaseController
{
    // GET TYPES
    public function index()
    {
        $data = [
            'folder_name'   => 'types',
            'page_name'     => 'types',
            'page_title'    => 'product types',
            'types'      => $this->types->orderBy('id', 'DESC')->findAll()
        ];
        view($this->backpath.'/index', $data);
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
            'folder_name'       => 'types',
            'page_name'         => 'create',
            'page_title'        => 'Create Type',
            'errors'            => $this->validation->getErrors()
        ];
        return view($this->backpath.'/view', $data);
    }

    // UPDATE TYPE
    public function update()
    {
        helper(['form', 'url']);
        $id                = $this->request->uri->getSegment(3);
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                 => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'location'              => $this->request->getVar('location'),
                'status'                => $this->request->getVar('status'),
                'message'               => 'type created successfully'
            ];
            $this->types->update($id, $data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'types',
            'page_name'         => 'update',
            'page_title'        => 'Update Type',
            'type'              => $this->types->find($id),
            'errors'            => $this->validation->getErrors()
        ];
        return view($this->backpath.'/view', $data);
    }
}
