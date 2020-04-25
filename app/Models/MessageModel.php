<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $allowedFields = ['sender_id', 'receiver_id', 'message'];
    function get_users_by_messages()
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $query = $db->query("SELECT users.id, users.username, messages.message
        FROM messages
        INNER JOIN users ON users.id=messages.sender_id OR users.id=messages.receiver_id GROUP BY users.username" );
        return $query->getResultArray();
    }
}
