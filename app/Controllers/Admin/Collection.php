<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Collection extends BaseController
{
    // GET collection
    public function index()
    {
        $data = [
            'folder_name'   => 'products',
            'page_name'     => 'collection',
            'page_title'    => 'product collection',
            'collection'      => $this->collection->orderBy('id', 'DESC')->findAll()
        ];
        return view($this->backpath.'/index', $data);
    }

    // CREATE A NEW COLLECTION
    public function create()
    {
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                  => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'image'                 => $this->request->getVar('location'),
                'products'              => implode(",",$this->request->getVar('products')),
            ];
            $path = 'assets/uploads/collection/';
            if ($img = $this->request->getFile('image')) {
                // return print_r();
                    if ($img->isValid() && !$img->hasMoved()) {
                        $file_name = $img->getRandomName();
                        $data['image'] = $path.$file_name;
                        $img->move($path, $file_name);
                }
            }
            $this->collection->save($data);
            return $this->response->setJSON(['status'=>201,'message'=>'collection created successfully','data'=> array_replace($data,['id'=>$this->collection->insertID()])]);
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'collection_create',
            'page_title'        => 'Create Collecion',
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
                'name'                  => $this->request->getVar('name'),
                'slug'                  => url_title($this->request->getVar('name')),
                'image'                 => $this->request->getVar('image'),
            ];
            $this->collection->update($id, $data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'       => 'products',
            'page_name'         => 'collection_update',
            'page_title'        => 'Update Collection',
            'collection'        => $this->collection->find($id),
            'errors'            => $this->validation->getErrors()
        ];
        return view($this->backpath.'/view', $data);
    }
}
