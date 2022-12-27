<?php

namespace App\Controllers\Barang;

use App\Controllers\BaseController;
use App\Models\BarangKeluarModel;
use App\Models\BarangModel;

class BarangKeluarController extends BaseController
{
    function __construct()
    {
        $this->dataBarang = new BarangModel();
        $this->dataBarangKeluar = new BarangKeluarModel();
    }

    public function delete($id)
    {
        $keluar = $this->dataBarangKeluar->where('id_barang_keluar', $id)->first();
        $barang = $this->dataBarang->where('id_barang', $keluar["id_barang"])->first();

        $this->dataBarang->update($barang["id_barang"], [
            'stok' => $barang["stok"] + $keluar["jumlah"]
        ]);

        $this->dataBarangKeluar->delete($id);

        return redirect()->to(base_url('databarangkeluar'));
    }

    public function read()
    {

        $data = [
            'barangKeluar' => $this->dataBarangKeluar->join(),
            'judul' => 'Data Keluar',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];
        echo view('Barang/Read-Barang-Keluar', $data);
    }

    public function barangKeluar()
    {

        $data = [
            'barang' => $this->dataBarang->findAll(),
            'barangKeluar' => $this->dataBarangKeluar->findAll(),
            'judul' => 'Data Keluar',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'stok' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {


            $result = $this->dataBarang->where('id_barang', $this->request->getPost('kode_barang'))->first();

            $this->dataBarang->update($result["id_barang"], [
                "stok" => $result["stok"] - $this->request->getPost('stok')
            ]);

            $this->dataBarangKeluar->insert([
                "id_barang" => $this->request->getPost('kode_barang'),
                "jumlah" => $this->request->getPost('stok')
            ]);
        }

        return redirect('databarangkeluar', $data);
    }

    // echo view('Barang/getID');

    public function cetakBarangKeluar()
    {
        $tglawal = $this->request->getPost('tglawal');
        $tglakhir = $this->request->getPost('tglakhir');

        $data = [
            'barangKeluar' => $this->dataBarangKeluar->where('id_barang', $tglawal, $tglakhir)->first()
        ];

        echo view('Barang/Print-Barang-Keluar', $data);
    }
}
