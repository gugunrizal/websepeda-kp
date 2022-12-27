<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
    protected $table      = 'barang_keluar';
    protected $primaryKey = 'id_barang_keluar';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_barang', 'jumlah', 'created_at'];

    public function join()
    {
        return $this->db->table('barang_keluar')
            ->join('barang', 'barang.id_barang = barang_keluar.id_barang')
            ->get()->getResultArray();
    }
}
