<?php

namespace App\Controllers;

class matakuliah extends BaseController
{
    public function index()
    {
        return view('view-form-matakuliah');
    }
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        return view('view-data-matakuliah', $data);
    }
}
