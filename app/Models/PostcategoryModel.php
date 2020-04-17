<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class PostcategoryModel extends Model
{
    protected $table = 'post_categories';
    protected $allowedFields = ['name','slug','status'];

}
