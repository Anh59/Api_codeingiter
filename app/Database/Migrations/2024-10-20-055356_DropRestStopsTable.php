<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropRestStopsTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('rest_stops', true);
    }

    public function down()
    {
        // Nếu muốn rollback để tạo lại bảng, có thể định nghĩa lại cấu trúc bảng ở đây
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'comment' => 'Tên địa điểm nghỉ chân'
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => false,
                'comment' => 'Địa chỉ'
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
                'comment' => 'Loại (ăn uống, nghỉ qua đêm)'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('rest_stops');
    }
}
