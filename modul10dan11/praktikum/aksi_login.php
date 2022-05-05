<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];

if ($op == "in") {
    $query_l = "SELECT * FROM register where username = '$username' AND password = '$password';";
    $h_l = $koneksi->query($query_l);
    if (mysqli_num_rows($h_l) == 1) {
        $d_l = $h_l->fetch_array();
        $_SESSION['username'] = $d_l['username'];
        $_SESSION['level'] = $d_l['level'];
        if ($d_l['level'] == "admin") {
            header("location:home.php");
        } else if ($d_l['level'] == "mahasiswa") {
            header("location:home.php");
        } else if ($d_l['level'] == "dosen") {
            header("location:home.php");
        } else {
            die("Password salah <a href=\"javascript:history.back()\">kembali</a>");
        }
    }
} else if ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:login.php");
}
