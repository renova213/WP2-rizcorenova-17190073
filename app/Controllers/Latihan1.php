<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index($n1, $n2)
    {
        $modelJumlah = new Model_latihan1();
        $hasil = $modelJumlah->jumlah($n1, $n2);

        echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }

    public function penjumlahan($n1, $n2)
    {
        $modelJumlah = new Model_latihan1();
        $hasil = $modelJumlah->jumlah($n1, $n2);
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $hasil;
        return view('view_latihan', $data);
    }
}
