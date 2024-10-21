<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tour extends Migration
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
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'start_date' => [
                'type' => 'DATE',
            ],
            'end_date' => [
                'type' => 'DATE',
            ],
            'location' => [
                'type' => 'TEXT',
            ],
            'participants' => [
                'type' => 'INT',
            ],
            'rest_stop_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'transport_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('rest_stop_id', 'rest_stops', 'id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('transport_id', 'transports', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('tours');
    }

    public function down()
    {
        $this->forge->dropTable('tours');
    }
}
