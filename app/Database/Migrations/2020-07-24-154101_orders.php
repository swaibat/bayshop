<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'user_id'       	=> [
				'type'     	=> 'INT',
				'constraint' 	=> 11,
			],
			'payment_id'       	=> [
				'type'      	=> 'INT',
				'constraint' 	=> 11,
			],
			'adress_id'       	=> [
				'type'          => 'INT',
				'constraint' 	=> 11,
			],
			'created_at' => [
					'type'    	=> 'TEXT',
					'null'     	=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('orders');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('orders');
	}
}
