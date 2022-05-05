<?php
session_start();
include "../koneksi.php";
$sql = "SELECT * FROM barang";
$query = $koneksi->query($sql);
$no = 1;
$sql2 = "SELECT nama_barang, jumlah,tanggal FROM pembelian, barang where pembelian.id_barang = barang.id_barang";
$query2 = $koneksi->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>

<body>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['level'] == 'admin') {
        echo '<p><a href="javascript:history.back()">Kembali</a></p>';
    }   ?>
    <form action="aksi_tambahbarang.php" method="POST">
        <fieldset style="width: fit-content;">
            <legend>Form Tambah Baru</legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <p>Data Barang</p>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php while ($data = $query->fetch_array()) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td>Rp.<?php echo $data['harga'] ?>/item</td>
                <td><?php echo $data['stok'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>