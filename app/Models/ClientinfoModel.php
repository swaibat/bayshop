<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientinfoModel extends Model
{
    function index()
    {
        $session          = \Config\Services::session();
        $req_url = 'https://get.client-ip.com/lookup';
        $data = file_get_contents($req_url);
        return $session->set('location', $data);
    }
}
