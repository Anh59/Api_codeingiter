<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');   
    }

    public function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'] // Thêm email vào session nếu cần
        ];
        session()->set($data);
    }


    public function sentlogin()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email'); // Lấy giá trị email từ form
        $password = $this->request->getPost('password');
        // var_dump($this->request);
    
        // Tìm người dùng dựa trên email
        $user = $userModel->where('email', $email)->first();
        // dd($user);
        
        if (!$user) {
            // Nếu email không tồn tại trong cơ sở dữ liệu
            session()->setFlashdata('error', 'Email chưa được đăng ký.');
            return redirect()->to(site_url('login'));
        }
       
        // var_dump("Mật khẩu nhập vào: ", $password);
        // echo "Mã hóa mật khẩu nhập vào:", password_hash($password, PASSWORD_BCRYPT);

        // var_dump("Mật khẩu lấy từ cơ sở đã mã hóa: ", $user['password']);
        // Kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            // Nếu mật khẩu đúng, đặt thông tin người dùng vào session và chuyển hướng đến trang chính
            $this->setUserSession($user);
            return redirect()->to(site_url('/'));
        } else {
            // Nếu mật khẩu không đúng
            session()->setFlashdata('error', 'Mật khẩu không đúng.');
            return redirect()->to(site_url('login'));
        };


        // if (password_verify(password_hash($password, PASSWORD_DEFAULT), $user['password'])) {
        //     }
    }




    
    

  
}
