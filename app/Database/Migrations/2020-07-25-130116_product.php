<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
    {
		// $this->db->disableForeignKeyChecks();
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
				'unique'         => true,
			],
			'slug' => [
                'type' => 'VARCHAR',
				'constraint' => '100',
				'unique'         => true,
			],
			'sku' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
			],
			'price' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'discount' => [
                'type' => 'INT',
				'constraint' => 11,
				'null'     	=> true,
			],
			'category_id' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'collection_id' => [
                'type' => 'INT',
				'constraint' => 11,
				'null'     	=> true,
			],
			'views' => [
                'type' => 'INT',
				'constraint' => 11,
				'default'        => 0,
				'null'     	=> true,
			],
			'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['in_stock', 'out_of_stock'],
                'default'        => 'in_stock',
			],
			'discount' => [
                'type' => 'INT',
				'constraint' => 11,
				'null'     	=> true,
			],
			'discount_type' => [
                'type'           => 'ENUM',
                'constraint'     => ['sale_price', 'discount'],
                'default'        => 'discount',
			],
			'materials' => [
				'type'    	=> 'TEXT',
				'null'     	=> true,
			],
			'sizes' => [
				'type'    	=> 'TEXT',
				'null'     	=> true,
			],
			'colors' => [
				'type'    	=> 'TEXT',
				'null'     	=> true,
			],
			'weight' => [
                'type' => 'INT',
				'constraint' => 11,
				'null'     	=> true,
			],
			'description' => [
                'type' => 'VARCHAR',
				'constraint' => '500',
				'null'     	=> true,
			],
			'seo_title' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
				'null'     	=> true,
			],
			'seo_description' => [
                'type' => 'VARCHAR',
				'constraint' => '100',
				'null'     	=> true,
			],
			'social_title' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
				'null'     	=> true,
			],
			'social_description' => [
                'type' => 'VARCHAR',
				'constraint' => '100',
				'null'     	=> true,
			],
        ]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('products');
		// $this->forge->addForeignKey('users_id','users','id');
		// $this->forge->addForeignKey('categories_id','categories','id');
		// $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
