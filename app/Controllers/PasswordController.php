<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

class PasswordController extends BaseController
{
    public function requestReset()
    {
        return view('request_reset');
    }

    public function sendResetOTP()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');

        $user = $userModel->getUserByEmail($email);
        if ($user) {
            $otp = $this->generateOTP();
            $this->sendOTP($email, $otp);

            // Lưu OTP vào cơ sở dữ liệu
            $userModel->update($user['id'], ['otp' => $otp]);

            echo "An OTP has been sent to your email.";
            // header("Location:/verify-reset-otp");
             return redirect()->to(site_url('/verify-reset-otp'));
        } else {
            echo "Email not found.";
        }
    }

    private function generateOTP()
    {
        return rand(100000, 999999);
    }

    private function sendOTP($email, $otp)
    {
        $emailService = Services::email();

        $emailService->setFrom('your@example.com', 'Your Name');
        $emailService->setTo($email);

        $emailService->setSubject('Password Reset OTP');
        $emailService->setMessage('Your OTP code is: ' . $otp);

        if (!$emailService->send()) {
            log_message('error', 'Failed to send OTP email: ' . $emailService->printDebugger(['headers']));
        }
    }


    public function verifyResetOTP()
        {
            return view('verify_reset_otp');
        }

        public function confirmResetOTP()
        {
            $userModel = new UserModel();
            $email = $this->request->getPost('email');
            $otp = $this->request->getPost('otp');

            $user = $userModel->getUserByEmail($email);
            if ($user && $user['otp'] == $otp) {
                return redirect()->to(site_url('/reset-password'))->with('email', $email);
            } else {
                echo "Invalid OTP.";
            }
        }


        public function resetPassword()
        {
            return view('reset_password');
        }
        
        public function updatePassword()
        {
            $userModel = new UserModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
        
            if ($this->validatePassword($password)) {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $userModel->update(['email' => $email], ['password' => $hashedPassword, 'otp' => null]);
                echo "Password has been reset.";
                // header("Location: /");
            } else {
                echo "<script>alert('Password must be at least 8 characters long and contain letters, numbers, and special characters.');</script>";
               
            }
        }
        
        private function validatePassword($password)
        {
            $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
            return preg_match($pattern, $password);
        }
        

}
