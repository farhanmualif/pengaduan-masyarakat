<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function admin()
    {
        return view('user/admin');
    }
    public function masyarakat()
    {
        return view('user/masyarakat');
    }
}
