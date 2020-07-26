<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupon extends Migration
{
    public function up()
    {
		$this->db->disableForeignKeyChecks();
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
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['sale', 'discount', 'free_shipping', 'buy_x_get_y'],
                'default' => 'sale',
            ],
            'code' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
				'unique'         => true,
            ],
            'offer' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'valid_from' => [
                'type' => 'DATE',
            ],
            'valid_to' => [
				'type' => 'DATE',
				'null' => true,
            ],
            'apply_value' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'apply_to' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'buy_x_get_y' => [
                'type' => 'TEXT',
                'null' => true,
			],
			'user_id' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id','users','id');
		$this->forge->createTable('coupons');
		$this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('coupons');
    }
}
