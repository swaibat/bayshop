<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
			],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'parent_id' => [
                'type' => 'INT',
				'constraint' => 11,
				'null'     	=> true,
			],
			'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],      
            'image' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null'     	=> true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
