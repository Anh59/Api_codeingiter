<?php

namespace App\Models;

use CodeIgniter\Model;

class TransportModel extends Model
{
    protected $table = 'transports';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'driver_name',
        'vehicle_number',
        'transport_id',
    ];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
}
