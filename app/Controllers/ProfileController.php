<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    public function personal_info()
    {
        return view('Customer/personal_info');
    }
    public function changepassword()
    {
        return view('Customer/change_password');
    }
    public function Order()
    {
        return view('Customer/customers_order');
    }
    public function test()
    {
        return view('Customer/testgi');
    }
}
