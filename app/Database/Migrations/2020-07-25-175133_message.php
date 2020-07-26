<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Message extends Migration
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
			'sender_id' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'receiver_id' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'messages' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
			],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
