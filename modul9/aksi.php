<?php
    include "koneksi.php";
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $ruang = $_POST['ruang'];
    $idmatkul = $_POST['matkul'];
    $sql = "INSERT INTO jadwal (id_matkul,hari,jam,ruang) VALUES ($idmatkul,'$hari','$jam','$ruang')";
    $a = $koneksi->query($sql);
    if ($a===true) {
        header('location: hasiljadwal.php');
    }else{
        echo "error";
    }
