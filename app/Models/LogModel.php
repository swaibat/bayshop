<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class logModel extends Model
{
    protected $table = 'logs';
    protected $allowedFields = [];
    function get_countries_visitors()
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('logs');
        $builder->groupBy("country");
        $builder->orderBy('visits', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
