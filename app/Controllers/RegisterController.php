<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function sentregister()
    {
        $userModel = new UserModel();
    
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        // Kiểm tra tính hợp lệ của mật khẩu
        if (!$this->validatePassword($password)) {
            echo "Mật khẩu phải chứa ít nhất 8 ký tự, bao gồm chữ cái, chữ số và ký tự đặc biệt.";
            return;
        }
    
        // Kiểm tra xem tên người dùng đã tồn tại chưa
        if ($userModel->isUsernameExists($username)) {
            echo "Tên người dùng đã tồn tại.";
            return;
        }
    
        // Kiểm tra xem email đã tồn tại chưa
        if ($userModel->isEmailExists($email)) {
            echo "Email đã tồn tại.";
            return;
        }

        // Generate random OTP
        $otp = $this->generateOTP();

        // Send OTP to user's email
        $this->sendOTP($email, $otp);
    
        // Băm mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
        // Dữ liệu để chèn vào cơ sở dữ liệu
        $data = [
            'username' => $username,
            'password' => $hashedPassword,
            'email' => $email,
            'otp' => $otp // Lưu mã OTP vào cơ sở dữ liệu
        ];
    
        // Lưu dữ liệu vào cơ sở dữ liệu
        if ($userModel->insert($data)) {
            return redirect()->to(site_url('/verify'));
        } else {
            echo "Lỗi khi đăng ký.";
        }
    }

    public function verify()
    {
        return view('verify');
    }

    public function confirmOTP()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $otp = $this->request->getPost('otp');

        // Lấy thông tin user từ email
        $user = $userModel->getUserByEmail($email);

        if ($user && $user['otp'] == $otp) {
            // Xác nhận thành công, có thể cho phép user đăng nhập hoặc thực hiện các hành động khác
            // Xóa OTP khỏi cơ sở dữ liệu (vì đã sử dụng)
            $userModel->removeOTP($email);
            return redirect()->to(site_url('/')); // Chuyển hướng đến trang đăng nhập
        } else {
            echo "Mã OTP không chính xác.";
            return redirect()->to(site_url('/register')); //
        }
    }

    private function generateOTP()
    {
        // Generate a random 6-digit OTP
        return rand(100000, 999999);
    }

    private function sendOTP($email, $otp)
    {
        $emailService = \Config\Services::email();

        $emailService->setFrom('your@example.com', 'Your Name');
        $emailService->setTo($email);

        $emailService->setSubject('Your OTP Code');
        $emailService->setMessage('Your OTP code is: ' . $otp);

        if (!$emailService->send()) {
            // Log the error or handle it as necessary
            log_message('error', 'Failed to send OTP email: ' . $emailService->printDebugger(['headers']));
        }
    }


    private function validatePassword($password)
    {
        // Mật khẩu phải chứa ít nhất 8 ký tự, bao gồm chữ cái, chữ số và ký tự đặc biệt
        $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
        // $pattern ='@';
        return preg_match($pattern, $password);
    }

    public function table()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('table', $data);
        
        
    }
}
