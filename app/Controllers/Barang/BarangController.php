<?php

namespace App\Controllers\Barang;

use Dompdf\Dompdf;
use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    protected $loggedin;

    function __construct()
    {

        $this->dataBarang = new BarangModel();
    }



    public function index()
    {

        $data = [
            'jumlah' => $this->dataBarang->countAll(),
            'judul' => 'Dashboard',
            'aktif' => 'active',
            'aktif2' => '',
            'aktif3' => ''
        ];
        return view('Index', $data);
    }

    public function read()
    {

        if (session()->get('userdata') == NULL) {
            return redirect()->to(base_url());
        }
        // $dataBarang['barang'] = $this->dataBarang->findAll();

        $data = [
            'barang' => $this->dataBarang->findAll(),
            'judul' => 'Data Master',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];
        echo view('Barang/Read-Barang', $data);
    }

    public function add()
    {
        $data = [
            'barang' => $this->dataBarang->findAll(),
            'judul' => 'Data Master',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required',
            'supplier' => 'required',
            'merk' => 'required',
            'stok' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $this->dataBarang->insert([
                "nama_barang" => $this->request->getPost('nama_barang'),
                "jenis_barang" => $this->request->getPost('jenis_barang'),
                "merk" => $this->request->getPost('merk'),
                "harga" => $this->request->getPost('harga'),
                "supplier" => $this->request->getPost('supplier'),
                "stok" => $this->request->getPost('stok')
            ]);
            return redirect('barang');
        }

        // tampilkan form create
        echo view('Barang/Add-Barang', $data);
    }

    public function update($id)
    {
        $data = [
            'barang' => $this->dataBarang->where('id_barang', $id)->first(),
            'judul' => 'Data Master',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required',
            'merk' => 'required',
            'supplier' => 'required',
            'stok' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $this->dataBarang->update($id, [
                "nama_barang" => $this->request->getPost('nama_barang'),
                "kode_barang" => $this->request->getPost('kode_barang'),
                "jenis_barang" => $this->request->getPost('jenis_barang'),
                "merk" => $this->request->getPost('merk'),
                "supplier" => $this->request->getPost('supplier'),
                "harga" => $this->request->getPost('harga'),
                "stok" => $this->request->getPost('stok')
            ]);
            return redirect('barang');
        }

        // tampilkan form create
        echo view('Barang/Update-Barang', $data);
    }

    public function delete($id)
    {
        $this->dataBarang->delete($id);
        return redirect('barang');
    }

    public function cetak()
    {
        $data = [
            'barang' => $this->dataBarang->findAll(),
            'judul' => 'Data Master',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => ''
        ];

        $filename = date('y-m-d') . '-data-sepeda-new';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Barang/Print_Barang', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }

    public function getID()
    {


        $data = [
            'barang' => $this->dataBarang->findAll(),
            'judul' => 'Data Keluar',
            'aktif' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'ajak' => true,
        ];

        return view('Barang/Barang-Keluar', $data);
    }

    public function tampilKode()
    {

        $data = [
            'barang' => $this->dataBarang->where('id_barang', $_POST['kode'])->first(),
        ];


        echo json_encode($data);
    }
}
