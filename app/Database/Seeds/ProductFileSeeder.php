<?php namespace App\Database\Seeds;

class ProductFileSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    'file_path'         => 'assets/uploads/products/1593434716_3b6cfd649046db50a2c5.jpg',
                    'product_id'        => 1,
                    'file_order'        => 1,
                ];
                // Using Query Builder
                $this->db->table('categories')->insert($data);
        }
}