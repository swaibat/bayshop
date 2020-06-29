<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $allowedFields = ['title', 'slug','price','discount','sku','collection_id','vendor_id', 'description','category_id','status','forcus_keywords','meta_description'];
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
        return reset($query->getResultArray());
    }

    function get_product_by_id($id)
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('products');
        $builder->select('*');
        $builder->join('product_files', 'products.id = product_files.product_id');
        $builder->where('products.id', $id);
        $builder->orderBy('products.id', 'ASC');
        $query = $builder->getResultArray();
        return $query;
    }
}
