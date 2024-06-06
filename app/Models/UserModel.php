<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id'; // Khóa chính của bảng

    protected $allowedFields = ['email','username','password','otp','status']; // Các cột có thể chèn và cập nhật

    protected $returnType = 'array'; // Kiểu dữ liệu trả về (array hoặc object)
    protected $useTimestamps = false; // Nếu bạn muốn sử dụng cột created_at và updated_at

    // Nếu bạn muốn sử dụng các cột created_at và updated_at với tên khác, bạn có thể định nghĩa như sau:
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';

    // Thêm các phương thức tùy chỉnh nếu cần
    public function isUsernameExists($username)
    {
        return $this->where('username', $username)->first() !== null;
    }

    // Phương thức kiểm tra tồn tại của email
    public function isEmailExists($email)
    {
        return $this->where('email', $email)->first() !== null;
    }


    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function removeOTP($email)
    {
        return $this->where('email', $email)->set(['otp' => null])->update();
    }
    
    public function updatePassword($email, $password)
    {
        return $this->where('email', $email)->set(['password' => $password])->update();
    }
}
