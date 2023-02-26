<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('user/admin/admin');
    }

    public function table_pegawai()
    {
        return view('user/admin/table/pegawai');
    }
    public function table_masyarakat()
    {
        return view('user/admin/table/masyarakat');
    }
}
