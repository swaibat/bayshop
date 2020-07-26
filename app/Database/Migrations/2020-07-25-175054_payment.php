<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payment extends Migration
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
            'txn_id' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
				'unique'         => true,
            ],
            'currency_code' => [
                'type' => 'VARCHAR',
				'constraint' => '50',
            ],
            'payer_email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
            'payment_method' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'payment_status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'amount' => [
                'type' => 'FLOAT',
            ],
            'created_at' => [
				'type' => 'DATE',
				'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
			'user_id' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('payments');
		// $this->forge->addForeignKey('user_id','users','id');
		// $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
