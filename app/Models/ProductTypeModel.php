<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductTypeModel extends Model
{
    protected $table = 'product_type';
    protected $allowedFields = ['name','slug','status','location'];

}
