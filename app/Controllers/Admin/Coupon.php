<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Coupon extends BaseController
{


    public function index()
    {
        $data = [
            'folder_name'   => 'coupons',
            'page_name'     => 'index',
            'page_title'    => 'coupons',
            'coupons'       => $this->coupons->findAll(),
        ];
        echo view($this->backpath.'/index', $data);
    }

    // CREATE A NEW COUPON
    public function create()
    {
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                  => $this->request->getVar('name'),
                'type'                  => url_title($this->request->getVar('type')),
                'code'                  => $this->request->getVar('code'),
                'offer'                 => $this->request->getVar('offer'),
                'collection_id'         => $this->request->getVar('collection_id'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'expiry_date'           => $this->request->getVar('expiry date'),
                'collection'            => $this->collection->findAll()
            ];
            $this->user->save($data);
            return $this->response->setJSON(['status_code'=> 201,'message'=>'coupon created succesfully','data'=>$data]);
        }
        $data = [
            'folder_name'       => 'coupons',
            'page_name'         => 'create',
            'page_title'        => 'Create Coupon',
            'errors'            => $this->validation->getErrors()
        ];
        echo view('admin/view', $data);
    }
}