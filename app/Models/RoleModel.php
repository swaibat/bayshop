<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'Roles';
    protected $allowedFields = ['name', 'slug'];
}
