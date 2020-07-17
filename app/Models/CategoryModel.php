<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $allowedFields = ['name','parentid', 'slug', 'vendor_id'];
    public function get_products_by_category($slug)
    {
        $db      = \Config\Database::connect();
        $db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $builder = $db->table('categories');
        $builder->select('*');
        $builder->join('products', 'products.category_id = categories.id');
        $builder->orderBy('products.id', 'DESC');
        $builder->where('categories.slug', $slug);
        $query = $builder->get();
        return $query->getResultArray();
    }

}
