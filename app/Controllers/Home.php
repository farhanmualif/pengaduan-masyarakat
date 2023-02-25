<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/admin');
    }
    public function masyarakat()
    {
        return view('user/masyarakat');
    }
}
