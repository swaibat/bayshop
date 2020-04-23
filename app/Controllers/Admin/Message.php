<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Message extends BaseController
{

    // public function get_user_info()
    // {
    //     $req_url = 'https://get.client-ip.com/lookup';
    //     $data = file_get_contents($req_url);
    //     $this->session->set('hello', $data);
    // }

    // GET CHAT MESSAGES
    public function index()
    {
        print_r($this->clientInfo->index());
        $data = [
            'folder_name'   => 'messages',
            'page_name'     => 'messages',
            'page_title'    => 'chat messages',
            // 'user_info'     => $this->get_user_info(),
        ];
        echo view('admin/index', $data);
    }

    // CREATE A NEW MESSAGE
    public function create()
    {
        helper(['form', 'url']);
        if ($this->validate([
            'message' => 'required',
        ])) {
            $data = [
                'sender_id'             => $this->request->getVar('sender_id'),
                'receiver_id'           => $this->request->getVar('receiver_id'),
                'status'                => $this->request->getVar('status') || '0',
                'message'               => $this->request->getVar('message'),
            ];
            $this->messages->save($data);
            return $this->response->setJSON($data);
        }
        $data = [
            'folder_name'   => 'messages',
            'page_name'     => 'messages',
            'page_title'    => 'chat messages',
            // 'user_info'     => $this->get_user_info(),
            'errors'        => $this->validation->getErrors()
        ];
        return view('admin/view', $data);
    }
}
