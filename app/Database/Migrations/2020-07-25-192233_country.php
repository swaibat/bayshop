<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Country extends Migration
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
                'unique' => true,
            ],
            'dial_code' => [
                'type' => 'INT',
                'constraint' => '50',
            ],
            'currency_code' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'currency_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'currency_symbol' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'tld' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'a2_code' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'a3_code' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('countries');
    }

    public function down()
    {
        $this->forge->dropTable('countries');
    }
}
