<?= $this->extend('Layout/PageLayout'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Barang Keluar Toko Kembar Cabang Luragung</h3>
                            <a href="<?= base_url('datakeluar'); ?>" class="btn btn-info btn-sm mx-1" style="float: right;">+ Tambah Barang Keluar</a>
                            <a href="<?= base_url('barang/cetak'); ?>" class="btn btn-info btn-sm mx-1" style="float: right;">> Ekspor Data</a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="daterange">Pilih Periode</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="date" name="tglawal" id="tglawal" class="form-control">
                                </div>
                                <div class="col-lg-2">
                                    <input type="date" name="tglakhir" id="tglakhir" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Harga Barang</th>
                                <th>Merk Barang</th>
                                <th>Supplier</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;

                        foreach ($barangKeluar as $data) :
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['nama_barang']; ?></td>
                                    <td><?= $data['jenis_barang']; ?></td>
                                    <td>Rp. <?= $data['harga']; ?></td>
                                    <td><?= $data['merk']; ?></td>
                                    <td><?= $data['supplier']; ?></td>
                                    <td><?= $data['jumlah']; ?> unit</td>
                                    <td>
                                        <a href="<?= base_url('/barangKeluar/delete/' . $data['id_barang_keluar']); ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="confirmToDelete(this)">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Harga Barang</th>
                                <th>Merk Barang</th>
                                <th>Supplier</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>
</section>

</div>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Apa Kamu Yakin?</h2>
                <p>Data yang sudah dihapus, tidak akan kembali</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Hapus</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        $("#confirm-dialog").modal('show');
        $("#delete-button").attr("href", el.dataset.href);
    }
</script>

<?= $this->EndSection(); ?>