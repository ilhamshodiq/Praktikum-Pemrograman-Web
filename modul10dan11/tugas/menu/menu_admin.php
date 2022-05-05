<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "../koneksi.php";
$username = $_SESSION['username'];
$sql = "SELECT * from register where username = '$username'";
$query = $koneksi->query($sql);
$data = $query->fetch_array();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
</head>

<body>
    <h1>Ini Menu admin</h1>
    <p>Anda login sebagai, <?php echo $data['namalengkap'] ?> <a href="../login/login.html" class="button-logout">Logout</a></p>
    <fieldset style="width: fit-content;">
        <legend>Menu yang tersedia :</legend>
        <button onclick="window.location.href='../barang/menu_barang.php'">Menu Barang</button>
        <button onclick="window.location.href='../barang/menu_belibarang.php'">Pembelian Barang</button>
        <button onclick="window.location.href='../penjualan/datapenjualan.php'">Index Penjualan</button>
    </fieldset>
</body>

</html>