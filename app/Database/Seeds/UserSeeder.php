<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'names' => 'jon doe',
                'slug' => 'doe',
                'username' => 'doe',
                'email' => 'doe@doolbay.com',
                'password' => '9d9e4f399a585fda43a9750ebfd1e00d',
                'company' => 'doolbay',
                'role' => 1,
                'telephone' => '(612)561-0113',
            ],
            [
                'names' => 'admin admin',
                'slug' => 'admin',
                'username' => 'admin',
                'email' => 'admin@doolbay.com',
                'password' => '9d9e4f399a585fda43a9750ebfd1e00d',
                'company' => 'doolbay',
                'role' => 1,
                'telephone' => '(612)561-0113',
            ],
        ];
        // Using Query Builder
            $this->db->table('users')->insertBatch($data);
    }
}
