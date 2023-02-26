<?php

namespace App\Controllers;

class MasyarakatController extends BaseController
{
    public function index()
    {
        return view('user/masyarakat/masyarakat');
    }

    public function form_pengaduan()
    {
        return view('user/masyarakat/form_pengaduan');
    }
}
