<?php namespace App\Database\Seeds;

class CategorySeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'name'          => 'vehicles',
                        'slug'          => 'vehicles',
                        'parent_id'     => null,
                        'user_id'       => '1',
                        'image'         => null,
                ];
                // Using Query Builder
                $this->db->table('categories')->insert($data);
        }
}