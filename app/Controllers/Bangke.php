<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bangke extends BaseController
{
    public function index()
    {
        return view('halaman1');
    }

    public function data()
    {
        $namakita = $this->request->getVar('nama');
        $nik = $this->request->getVar('nik');
        echo $namakita;
        echo "<br>";
        echo $nik;
    }
}
