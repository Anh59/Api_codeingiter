<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTotalPriceToBookings extends Migration
{
    public function up()
    {
        $this->forge->addColumn('bookings', [
            'total_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
                'default' => 0,
                'comment' => 'Tổng tiền của booking (gồm giá tour và phòng nghỉ)'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('bookings', 'total_price');
    }
}
