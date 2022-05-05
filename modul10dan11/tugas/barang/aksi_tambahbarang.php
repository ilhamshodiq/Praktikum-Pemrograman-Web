<?php
include "../koneksi.php";
$namabarang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT into barang (nama_barang,harga,stok) values ('$namabarang','$harga','$stok')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script>
                alert('Data Barang berhasil di inputkan');
                window.location.href = ('menu_barang.php');
            </script>";
} else {
    echo "<script>
                alert('Gagal Di inputkan');
                window.location.href = ('menu_barang.php');
            </script>";
}
