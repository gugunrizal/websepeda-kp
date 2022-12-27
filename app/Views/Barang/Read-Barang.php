<?= $this->extend('Layout/PageLayout'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
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
                            <h3 class="card-title">Data Stok Toko Sepeda Kembar Cabang Luragung</h3>
                            <a href="<?= base_url('barang/add'); ?>" class="btn btn-info btn-sm mx-1" style="float: right;">+ Tambah Data</a>
                            <a href="<?= base_url('barang/cetak'); ?>" class="btn btn-info btn-sm mx-1" style="float: right;">> Ekspor Barang</a>
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
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($barang as $data) :
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama_barang']; ?></td>
                                            <td><?= $data['jenis_barang']; ?></td>
                                            <td>Rp. <?= $data['harga']; ?></td>
                                            <td><?= $data['merk']; ?></td>
                                            <td><?= $data['supplier']; ?></td>
                                            <td><?= $data['stok']; ?> unit</td>
                                            <td>
                                                <a href="<?= base_url('/barang/' . $data['id_barang'] . '/update/'); ?>" class="btn btn-success btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <a href="#" data-href="<?= base_url('barang/' . $data['id_barang'] . '/delete'); ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick=" confirmToDelete(this)"> Hapus</a>
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
                                        <th colspan="2">Action</th>
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