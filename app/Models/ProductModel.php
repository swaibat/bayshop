<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $allowedFields = ['title', 'slug','price','discount','discount_type','sku','collection_id','vendor_id', 'description','category_id','status','seo_title','seo_description','social_title','social_description','sizes','materials','colors'];
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

    function search($search_term)
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('products');
        $builder->select('*');
        $builder->like('title', $search_term);
        $builder->join('product_files', 'products.id = product_files.product_id');
        $builder->orderBy('products.id', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
