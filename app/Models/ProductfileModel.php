<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductfileModel extends Model
{
    protected $table = 'product_files';
    protected $allowedFields = ['product_id', 'file_path', 'img_order'];
}
