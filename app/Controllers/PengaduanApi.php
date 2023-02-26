<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use CodeIgniter\RESTful\ResourceController;

class PengaduanApi extends ResourceController
{

    protected $pengaduanModel;


    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'judul_pengaduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'isi_pengaduan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'image' => [
                'rules' => 'is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png,image/JPG,image/JPEG,image/PNG]',
                'errors' => [
                    'is_image' => '{field} bukan gambar',
                    'mime_in' => '{field} tidak boleh kosong'
                ]
            ]
        ])) {
            $respons = [
                'status' => false,
                'message' => $this->validator->getErrors()
            ];
            return $this->failValidationErrors($respons);
        }


        $file = $this->request->getFile('image');

        if ($file->getError() == 4) {
            $file_name = 'image_default.png';
        } else {
            $file_name = $file->getRandomName();
            $file->move('img/pengaduan', $file_name);
        }

        $data = [
            'judul_pengaduan' => $this->request->getVar('judul_pengaduan'),
            'pesan_pengaduan' => $this->request->getVar('pesan_pengaduan'),
            'image' => $file_name
        ];

        if ($this->pengaduanModel->insert($data)) {
            $respons = [
                'status' => true,
                'message' => 'berhasil menambahkan data'
            ];
            return $this->respondCreated($respons);
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
