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
    }
    ?>
    <form action="aksi_belibarang.php" method="POST">
        <fieldset style="width: fit-content;">
            <legend>Tambah Stok Barang</legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <select name="id_barang">
                            <option value="">Pilih Barang</option>
                            <?php
                            foreach ($query as $data) {
                            ?>
                                <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nama_barang'] . " (Rp." . $data['harga'] . "/item)"; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal" size=" 18">
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="jumlah" size="18"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <p>Data Pembelian</p>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah Pembelian Barang</th>
            <th>Tanggal Pembelian</th>
        </tr>
        <?php while ($data = $query2->fetch_array()) { ?>
            <tr>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>