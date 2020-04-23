<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Currency extends BaseController{

    // GET CURRENCIES
    public function index()
    {
        $req_url = 'http://data.fixer.io/api/latest?access_key=e6f9f02beabdf4284826593a32ae2ca5';
        $data = file_get_contents($req_url);
        $arr = json_decode($data);
        foreach ($arr->rates as $key => $value) :
            $this->currencies->save([
                'name'          => $key,
                'value'         => $value,
                'updated_at'    => $arr->timestamp
            ]);
        endforeach;
        return $this->response->setJSON($arr);
    }
}
