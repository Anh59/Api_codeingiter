<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPricePerPersonToTours extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tours', [
            'price_per_person' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
                'default' => 0,
                'comment' => 'Giá mỗi người tham gia tour',
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('tours', 'price_per_person');
    }
}
