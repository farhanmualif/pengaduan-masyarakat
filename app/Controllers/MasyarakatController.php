<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class MasyarakatController extends BaseController
{

    protected $pengaduanModel;
    function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }
    public function index()
    {
        return view('user/masyarakat/masyarakat');
    }

    public function form_pengaduan()
    {
        $data = [
            'judul' => 'Form Pengaduan',
            'validation' => \Config\Services::validation()
        ];

        return view('user/masyarakat/form_pengaduan', $data);
    }

    public function kirim_pengaduan()
    {
        // code ...
    }
}
