<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnsToCustomers extends Migration
{
    public function up()
    {
        // Thêm cột image_url vào bảng customers
        $this->forge->addColumn('customers', [
            'image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Có thể để null nếu không bắt buộc phải có ảnh
            ],
        ]);
    }

    public function down()
    {
        // Xóa cột image_url khi rollback migration
        $this->forge->dropColumn('customers', 'image_url');
    }
}
