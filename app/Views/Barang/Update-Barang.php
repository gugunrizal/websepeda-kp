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
                <div class="col-sm-12">
                    <div class="card card-info">
                        <!-- form start -->
                        <form class="form-horizontal" action="" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $barang['jenis_barang']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Harga Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Asal Supplier</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="supplier" name="supplier" value="<?= $barang['supplier']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Merk Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="merk" name="merk" value="<?= $barang['merk']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Stok Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $barang['stok']; ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?= base_url('/barang') ?>" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->EndSection(); ?>