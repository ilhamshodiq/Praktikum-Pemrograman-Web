<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "../koneksi.php";
$username = $_SESSION['username'];
$sql = "SELECT * from register where username = '$username'";
$query = $koneksi->query($sql);
$data = $query->fetch_array();

$sql2 = "SELECT * FROM barang";
$query2 = $koneksi->query($sql2);
$no = 1;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pengguna</title>
</head>

<body>
    <h1>Ini Menu Pengguna</h1>
    <p>Anda login sebagai, <?php echo $data['namalengkap'] ?> <a href="../login/login.html" class="button-logout">Logout</a></p>
    <h3>Menu Belanja</h3>
    <table border="1" style="width:100%">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php while ($data = $query2->fetch_array()) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td>Rp.<?php echo $data['harga'] ?>/item</td>
                <td><?php echo $data['stok'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <form action="../penjualan/aksi_penjualan.php" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <select name="id_barang">
                        <option value="">Pilih Barang</option>
                        <?php
                        foreach ($query2 as $data) {
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
    </form>
</body>

</html>