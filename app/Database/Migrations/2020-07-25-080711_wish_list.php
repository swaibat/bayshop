<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WishList extends Migration
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
			'products' => [
                'type'    	=> 'TEXT',
				'null'     	=> true,
			],
			'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],      
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('wish_list');
    }

    public function down()
    {
        $this->forge->dropTable('wish_list');
    }
}
