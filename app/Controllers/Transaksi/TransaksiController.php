<?php

namespace App\Controllers\Transaksi;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class TransaksiController extends BaseController
{
    public function __construct()
    {
        $this->dataBarang = new BarangModel();
    }

    public function index()
    {
        $data = [
            "barang" => $this->dataBarang->findAll(),
            "kd_barang" => $this->request->getPost('kode_barang'),
            "judul" => "Transaksi",
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];

        return view('Transaksi/Index', $data);
    }

    public function transaksi()
    {
        $data = [
            "transaksi" => $this->dataBarang->findAll(),
            "judul" => "Transaksi",
            "aktif" => '',
            "aktif2" => 'active',
            "aktif3" => ''
        ];

        // $transaksi = [];
    }
}
