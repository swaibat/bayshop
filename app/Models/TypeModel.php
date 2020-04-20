<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class TypeModel extends Model
{
    protected $table = 'types';
    protected $allowedFields = ['name','slug','status','location'];

}
