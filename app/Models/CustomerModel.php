<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $allowedFields = [
        'name', 'email', 'phone', 'address', 'otp', 
        'otp_expiration', 'is_verified',
        'password', 'reset_token'
    ];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[customers.email]',
        'phone' => 'required|regex_match[/^[0-9]{10}$/]',
        'address' => 'permit_empty|max_length[255]',
        // Các quy tắc khác nếu cần
    ];
}
