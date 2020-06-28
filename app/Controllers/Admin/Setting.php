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
            $data = json_decode($this->request->getVar('data'), true);
            $logo = $this->request->getFile('logo');
            $favicon = $this->request->getFile('favicon');
            // return print_r($favicon);
            $path='assets/uploads/settings/';
            if ($logo->isValid() && !$logo->hasMoved()) {
                $logo->move($path);
                $data[] = ['name'=>'logo','value'=>$path.$logo->getName()];
            }else {
                return $this->res->setJSON(['status' => 400, 'message' => 'file not uploaded']);
            }
            if ($favicon->isValid() && !$favicon->hasMoved()) {
                $favicon->move($path);
                $data[] = ['name'=>'favicon','value'=>$path.$favicon->getName()];
            } else {
                return $this->res->setJSON(['status' => 400, 'message' => 'file not uploaded']);
            }
            foreach ($data as $key => $value) {
                if ($this->settings->where(['name' => $value['name']])->first()) {
                    $this->settings->where(['name' => $value['name']])->set($value)->update();
                } else {
                    $this->settings->save($value);
                }
            }
            return $this->res->setJSON(['status' => 201, 'message' => 'settings updated Successfully']);
        }
        $data = [
            'folder_name' => 'settings',
            'page_name' => 'settings',
            'page_title' => 'settings',
            'settings' => $this->settings->findAll(),
        ];
        return view('admin/index', $data);
    }
}
