<?php

namespace App\Models;

use CodeIgniter\Model;
class ProductModel extends Model {

    var $table = 'products';
    
    public function __construct() {
        parent::__construct();
        $this->db  = \Config\Database::connect();
    }

    public function get_products() {;
        $query = $this->db->table($this->table)->get();
        return $query->getResult();
        
    }
    public function create_product($data) {
        $this->db->table($this->table)->insert($data);
    }

}
