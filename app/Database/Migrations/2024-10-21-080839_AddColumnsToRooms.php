<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnsToRooms extends Migration
{
    public function up()
    {
        // Thêm các cột vào bảng 'rooms'
        $fields = [
            'cancellation' => [
                'type' => 'TEXT',
                'null' => true, // Cho phép giá trị null
            ],
            'extra' => [
                'type' => 'TEXT',
                'null' => true, // Cho phép giá trị null
            ],
            'image_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true, // Cho phép giá trị null
            ]
        ];
        
        $this->forge->addColumn('rooms', $fields);
    }

    public function down()
    {
        // Xóa các cột khi rollback migration
        $this->forge->dropColumn('rooms', ['cancellation', 'extra', 'image_url']);
    }
}
