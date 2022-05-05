<!DOCTYPE html>
<html lang="en">
<?php
include "../koneksi.php";
$sql = "SELECT nama_barang, jumlah,tanggal FROM penjualan, barang where penjualan.id_barang = barang.id_barang";
$query = $koneksi->query($sql);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Penjualan</title>
</head>

<body>
    <p><a href="javascript:history.back()">Kembali</a></p>
    <fieldset>
        <legend>Data Penjualan</legend>
        <table border="1" style="width: 100%;">
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah Barang Terjual</th>
                <th>Tanggal Terjual</th>
            </tr>
            <?php while ($data = $query->fetch_array()) { ?>
                <tr>
                    <td><?php echo $data['nama_barang'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><?php echo $data['tanggal'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </fieldset>
</body>

</html>