<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CollectionModel extends Model
{
    protected $table = 'collection';
    protected $allowedFields = ['name','slug','products','image'];

}
