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
    {   
        if ($this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                  => $this->request->getVar('name'),
                'type'                  => url_title($this->request->getVar('type')),
                'code'                  => $this->request->getVar('code'),
                'offer'                 => $this->request->getVar('offer'),
                'apply_to'              => $this->request->getVar('apply_to'),
                'buy_x_get_y'           => $this->request->getVar('buy_x_get_y')[0]!=0 ? implode(",",$this->request->getVar('buy_x_get_y')):null,
                'apply_value'           => $this->request->getVar('apply_value')!=0 ? implode(",",$this->request->getVar('apply_value')):null,
                'user_id'               => $this->user_data['id'],
                'valid_from'            => $this->request->getVar('valid_from'),
                'valid_to'              => $this->request->getVar('valid_to')
            ];
            $this->coupons->save($data);
            return $this->response->setJSON(['status_code'=> 201,'message'=>'coupon created succesfully','data'=>$data]);
        }
        $data = [
            'folder_name'       => 'coupons',
            'page_name'         => 'create_coupon',
            'page_title'        => 'Create Coupon',
            'collection'        => $this->collection->findAll(),
            'errors'            => $this->validation->getErrors(),
        ];
        return view('admin/view', $data);
    }

    // CREATE A NEW COUPON
    public function update()
    {   
        $id = $this->request->uri->getSegment(3);
        if (isset($_POST) && !empty($_POST) && $this->validate([
            'name' => 'required|min_length[3]|max_length[255]',
        ])) {
            $data = [
                'name'                  => $this->request->getVar('name'),
                'type'                  => url_title($this->request->getVar('type')),
                'code'                  => $this->request->getVar('code'),
                'offer'                 => $this->request->getVar('offer'),
                'apply_to'              => $this->request->getVar('apply_to'),
                'buy_x_get_y'           => $this->request->getVar('buy_x_get_y')[0]!=0 ? implode(",",$this->request->getVar('buy_x_get_y')):null,
                'apply_value'           => $this->request->getVar('apply_value')!=0 ? implode(",",$this->request->getVar('apply_value')):null,
                'user_id'               => $this->user_data['id'],
                'valid_from'            => $this->request->getVar('valid_from'),
                'valid_to'              => $this->request->getVar('valid_to')
            ];
            $this->coupons->update($id, $data);
            return $this->response->setJSON(['status_code'=> 201,'message'=>'coupon created succesfully','data'=>$data]);
        }
        $data = [
            'folder_name'       => 'coupons',
            'page_name'         => 'update_coupon',
            'page_title'        => 'Create Coupon',
            'collection'        => $this->collection->findAll(),
            'errors'            => $this->validation->getErrors(),
            'coupon'            => $this->coupons->find($id)
        ];
        return view('admin/view', $data);
    }
}