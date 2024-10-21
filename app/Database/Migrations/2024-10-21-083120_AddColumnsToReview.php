<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnsToReview extends Migration
{
    public function up()
    {
        // Thêm cột title vào bảng reviews
        $this->forge->addColumn('reviews', [
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Cột này có thể là NULL nếu không bắt buộc
            ],
        ]);
    }

    public function down()
    {
        // Xóa cột title khi rollback migration
        $this->forge->dropColumn('reviews', 'title');
    }
}
