<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Message extends BaseController
{

    // GET CHAT MESSAGES
    public function index()
    {

        $session_user = json_decode($_SESSION['user'])->id;
        $data = [
            'folder_name'   => 'messages',
            'page_name'     => 'messages',
            'page_title'    => 'chat messages',
            'users'         => $this->messages->get_users_by_messages($session_user),
        ];
        echo view($this->backpath.'/index', $data);
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
            'errors'        => $this->validation->getErrors()
        ];
        return view($this->backpath.'/view', $data);
    }

    // CREATE A NEW MESSAGE
    public function user()
    {
        $user_id = $this->request->uri->getSegment(4);
        $data=['messages'   =>  $this->messages->where('receiver_id', $user_id)->orWhere('sender_id', $user_id)->findAll()];
        return $this->response->setJSON($data);
    }
}
