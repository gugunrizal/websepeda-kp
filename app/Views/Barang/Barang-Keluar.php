<?= $this->extend('Layout/PageLayout'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Barang Keluar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-info">
                        <form class="form-horizontal" action="" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                                    <div class="col-sm-10">
                                        <select name="kode_barang" id="kode_barang" class="form-control">
                                            <?php foreach ($barang as $dataBarang) : ?>
                                                <option value="<?= $dataBarang['id_barang'] ?>" class="form-control"><?= $dataBarang['kode_barang'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="harga" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merk" class="col-sm-2 col-form-label">Merk Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="merk" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="supplier" class="col-sm-2 col-form-label">Supplier Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="supplier" readonly class="form-control">
                                    </div>
                                </div>
                                <div id="juml"></div>

                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('/barang') ?>" class="btn btn-warning">Kembali</a>
                                <!-- <a href="<?= base_url('/barangKeluar') ?>" class="btn btn-info">Simpan</a> -->
                                <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>