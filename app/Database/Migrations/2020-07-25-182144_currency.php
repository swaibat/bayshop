<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Currency extends Migration
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
				'constraint' => '50',
				'unique'         => true,
			],
			'value' => [
                'type' => 'FLOAT',
			],
			'base' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
			],
            'updated_at' => [
                'type' => 'DATETIME',
			],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('currencies');
    }

    public function down()
    {
        $this->forge->dropTable('currencies');
    }
}
