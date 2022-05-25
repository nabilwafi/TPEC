<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController

{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $barang
        ];
        return view('barang/data', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($slug)
        ];
        return view('barang/detail', $data);
    }
}
