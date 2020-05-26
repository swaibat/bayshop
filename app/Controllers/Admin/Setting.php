<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Setting extends BaseController
{

    // SETTINGS
    public function index()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'data' => 'required',
        ])) {
            foreach (json_decode($this->request->getVar('data'), true) as $key => $value) {
                if($this->settings->where(['name'=>$value['name']])->first()){
                    $this->settings->where(['name'=>$value['name']])->set($value)->update();
                }else {
                    $this->settings->save($value);
                }
             }
            return print_r($this->settings->findAll());
            // return $this->res->setJSON(['status' => 201, 'message' => 'settings updated Successfully']);
        }
        $data = [
            'folder_name'       => 'settings',
            'page_name'         => 'settings',
            'page_title'        => 'settings',
            'settings'          => $this->settings->findAll(),
        ];
        return view('admin/index', $data);
    }
}
