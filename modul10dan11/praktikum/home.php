<?php
session_start();
include "koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (!isset($_SESSION['username'])) {
    die("Anda belum login");
}
$username = $_SESSION['username'];
$level = $_SESSION['level'];
if ($level == "admin") {
    echo "Anda Sebagai " . $level;
} elseif ($level == "mahasiswa") {
    echo "Anda Sebagai " . $level;
} elseif ($level == "dosen") {
    echo "Anda Sebagai " . $level;
}
