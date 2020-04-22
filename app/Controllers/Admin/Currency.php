<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CurrencyModel;
use App\Models\CountryModel;
use App\Models\UserModel;

class Currency extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->currencies       = new CurrencyModel();
        $this->countries        = new CountryModel();
        $this->user             = new UserModel();
        $this->session          = \Config\Services::session();
        $this->validation       = \Config\Services::validation();
    }

    // GET POSTS
    public function index()
    {
        // Fetching JSON
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
