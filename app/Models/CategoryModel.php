<?php

namespace App\Models;

use CodeIgniter\Model;
class CategoryModel extends Model {

    var $table = 'category';
    
    public function __construct() {
        parent::__construct();
        $this->db  = \Config\Database::connect();
    }

    public function get_categories() {;
        $query = $this->db->query('select * from category');
        return $query->getResult();
        
    }

}
