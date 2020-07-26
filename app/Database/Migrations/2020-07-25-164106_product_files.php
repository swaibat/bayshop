<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductFile extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'file_path' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'file_order' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'products', 'id');
        $this->forge->createTable('product_files');
        $this->db->enableForeignKeyChecks();
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('product_files');
    }
}
