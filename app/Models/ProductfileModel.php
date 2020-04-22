<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductfileModel extends Model
{
    protected $table = 'product_files';
    protected $allowedFields = ['products_id', 'file_url', 'order'];
}
