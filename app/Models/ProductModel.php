<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $allowedFields = ['title', 'slug', 'country', 'description', 'price', 'compare_price', 'country', 'sku', 'available_quantity', 'category_id', 'type_id', 'vendor_id', 'status', 'focus_keyword', 'meta_description'];
}
