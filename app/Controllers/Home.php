<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/about');
    }
    public function index1(): string
    {
        return view('Home/about');
    }
    public function index2(): string
    {
        return view('Home/index');
    }
    public function index3(): string
    {
        return view('Home/blog');
    }
    public function index4(): string
    {
        return view('Home/contact');
    }
    public function index5(): string
    {
        return view('Home/elements');
    }
    public function index6(): string
    {
        return view('Home/layout-home');
    }
    public function index7(): string
    {
        return view('Home/test');
    }
    
}
