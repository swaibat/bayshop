<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $allowedFields = ['sender_id', 'receiver_id', 'message'];
    function get_users_by_messages($user_id)
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('messages');
        $builder->select('*');
        $builder->join('users', 'messages.sender_id = users.id OR users.id=messages.receiver_id');
        $builder->groupBy("users.username");
        $builder->orderBy('messages.id', 'DESC');
        $builder->where('users.id !=', $user_id);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
