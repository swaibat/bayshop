<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Coupon extends BaseController
{


    public function index()
    {
        $data = [
            'folder_name'   => 'coupons',
            'page_name'     => 'coupons',
            'page_title'    => 'coupons',
            'collection'    => $this->collection->findAll(),
            'coupons'       => $this->coupons->findAll(),
            'products'      => $this->products->findAll()
        ];
        echo view($this->backpath.'/index', $data);
    }

    // CREATE A NEW COUPON
    public function create()
    {   if (isset($_POST) && !empty($_POST)) {
        return $this->response->setJSON(['status_code'=> 201,'message'=>$_POST]);
    }
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                  => $this->request->getVar('name'),
                'type'                  => url_title($this->request->getVar('type')),
                'code'                  => $this->request->getVar('code'),
                'offer'                 => $this->request->getVar('offer'),
                'buy_x_get_y'           => implode(",",$this->request->getVar('buy_x_get_y')),
                'apply_to_collection'   => $this->request->getVar('apply_to_collection'),
                'user_id'               => $this->request->getVar('user_id'),
                'status'                => $this->request->getVar('status'),
                'valid_from'            => $this->request->getVar('vaid_from'),
                'valid_to'              => $this->request->getVar('valid_to')
            ];
            $this->user->save($data);
            return $this->response->setJSON(['status_code'=> 201,'message'=>'coupon created succesfully','data'=>$data]);
        }
        $data = [
            'folder_name'       => 'coupons',
            'page_name'         => 'create',
            'page_title'        => 'Create Coupon',
            'collection'        => $this->collection->findAll(),
            'errors'            => $this->validation->getErrors(),
            'products'      => $this->products->findAll()
        ];
        echo view('admin/view', $data);
    }
}