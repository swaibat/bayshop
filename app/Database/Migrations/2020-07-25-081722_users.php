<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'names' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
			],
			'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
			],
			'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
			],
			'password' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
			],
			'role' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'company' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'telephone' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
			],
			'is_verified' => [
                'type' => 'INT',
                'constraint' => 11,
			],
			'auth_keys' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null'     	=> true,
            ],        
            'avatar' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null'     	=> true,
			],
			'join_date' => [
                'type' => 'datetime',
				'null'     	=> true,
			],
			'last_login' => [
                'type' => 'datetime',
				'null'     	=> true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
