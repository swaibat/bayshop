<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slider extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'product_link' => [
				'type'    	=> 'TEXT',
				'null'     	=> true,
			],
			'image_link' => [
				'type'    	=> 'TEXT',
				'null'     	=> true,
			],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sliders');
    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}
