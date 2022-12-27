<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>

    <h2>Data Sepeda di Toko Sepeda Kembar Cabang Luragung</h2>
    <?php
    echo "Per Tanggal " . date('d-m-y');
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Harga Barang</th>
                <th>Merk Barang</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $data) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama_barang']; ?></td>
                    <td><?= $data['jenis_barang']; ?></td>
                    <td>Rp. <?= $data['harga']; ?></td>
                    <td><?= $data['merk']; ?></td>
                    <td><?= $data['stok']; ?> unit</td>
                </tr>
        </tbody>
    <?php endforeach ?>
    </table>
</body>

</html>