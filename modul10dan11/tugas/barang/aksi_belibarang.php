<?php
include "../koneksi.php";
$id_barang = $_POST['id_barang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];


$sql = "INSERT INTO pembelian (id_barang,tanggal,jumlah) values ('$id_barang','$tanggal','$jumlah')";
$query = $koneksi->query($sql);
if ($query == true) {
    echo "<script> 
            alert('Data Barang berhasil dibeli');
            window.location.href = ('menu_belibarang.php');
         </script>";
} else {
    echo "<script>
            alert('Pembelian Gagal');
            window.location.href = ('menu_belibarang.php');
        </script>";
}
