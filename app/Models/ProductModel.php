<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $allowedFields = ['title', 'slug', 'country', 'description', 'price', 'compare_price',  'sku', 'available_quantity', 'category_id', 'type_id', 'vendor_id', 'status', 'focus_keyword', 'meta_description'];
    function get_products()
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('products');
        $builder->select('*');
        $builder->join('product_files', 'products.id = product_files.product_id');
        $builder->orderBy('products.id', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }
    function get_product($slug)
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('products');
        $builder->select('*');
        $builder->join('product_files', 'products.id = product_files.product_id');
        $builder->where('products.slug', $slug);
        $builder->orderBy('products.id', 'ASC');
        $query = $builder->get();
        return $query->getFirstRow();
    }
}
