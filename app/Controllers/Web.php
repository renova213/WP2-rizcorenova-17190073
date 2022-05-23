<?php

namespace App\Controllers;

class Web extends BaseController
{

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        echo view('layout/v_header', $data);
        echo view('layout/v_index', $data);
        echo view('layout/v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman Depan";
        echo view('layout/v_header', $data);
        echo view('layout/v_about', $data);
        echo view('layout/v_footer', $data);
    }
}
