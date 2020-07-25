<?php namespace App\Database\Seeds;

class AddressSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'user_id'           => '1',
                        'contact_names'     => 'rumbiiha swaibu',
                        'contact_phone'     => '+256758307272',
                        'address_line_1'    => '123 Townsend St',
                        'address_line_2'    => 'Floor 6',
                        'admin_area_1'      => 'San Francisco',
                        'admin_area_2'      => 'CA',
                        'postal_code'       => '94107',
                        'country'           => 'US',
                ];
                // Using Query Builder
                $this->db->table('address')->insert($data);
        }
}