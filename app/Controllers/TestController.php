<?php

namespace App\Controllers;

class TestController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        
        if ($db->connect()) {
            echo "Connected to the database successfully!";
        } else {
            echo "Failed to connect to the database!";
        }
    }
}
