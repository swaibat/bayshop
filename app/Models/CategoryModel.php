<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $allowedFields = ['name', 'slug', 'status'];
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
    function group_categories()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("select root.name  as root_name
        , down1.name as down1_name
        , down2.name as down2_name
        , down3.name as down3_name
        from categories as root
          left outer
          join categories as down1
            on down1.parent_id = root.id
        left outer
          join categories as down2
            on down2.parent_id = down1.id
        left outer
          join categories as down3
            on down3.parent_id = down2.id
          where root.parent_id is null
        order 
       by root_name 
        , down1_name 
        , down2_name 
        , down3_name");
        return $query->getResultArray();
    }
}
