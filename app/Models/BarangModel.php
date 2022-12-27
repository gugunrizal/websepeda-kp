<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_barang', 'kode_barang', 'jenis_barang', 'merk', 'supplier', 'harga', 'stok'];
}
