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

        if (!$this->validate(['kode' => 'required', 'nama' => 'required', 'sks' => 'required'])) {
            return view('view-form-matakuliah');
        }
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'sks' => $this->request->getVar('sks')
        ];
        return view('view-data-matakuliah', $data);
    }
}
