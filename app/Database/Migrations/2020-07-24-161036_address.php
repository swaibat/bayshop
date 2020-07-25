<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'contact_names' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'contact_phone' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'address_line_1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'address_line_2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'admin_area_1' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'admin_area_2' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'postal_code' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('address');
    }

    public function down()
    {
        $this->forge->dropTable('address');
    }
}
