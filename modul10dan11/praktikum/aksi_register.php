<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$ulangi_password = md5($_POST['ulangi_password']);
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$level = $_POST['level'];

if ($password == $ulangi_password) {
    $sql = "INSERT INTO register VALUES ('$username', '$password', '$nama_lengkap', '$email', '$level')";
    $a = $koneksi->query($sql);
    if ($a == true) {
        echo "
            <script>
                alert('Anda Sukses Registrasi');
                history.back();
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Error');
                history.back();
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Ulangi, Password Anda tidak sama');
            history.back();
        </script>
    ";
}
