<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $email = $_POST['email'];
    $jawab = $_POST['jawab'];

    //ngecek formnya terisi apa belum
    if ($nama == "" || $alamat == "" || $jeniskelamin == "" || $email == "" || $jawab == "") {
        $cekformterisi = false;
    } else {
        $cekformterisi = true;
    }

    if ($jawab == "9" && $cekformterisi == true) {
        $jawab = "Benar";
        echo '<table id="tabelinput" border="1">';
        echo "<tr>";
        echo   "<thead>";
        echo    "<th>Nama</th>";
        echo    "<th>Alamat</th>";
        echo    "<th>Jenis Kelamin</th>";
        echo    "<th>Email</th>";
        echo    "<th>Jawaban</th>";
        echo    "</thead>";
        echo "</tr>";
        echo "<tr>";
        echo    "<tbody>";
        echo        "<th>$nama</th>";
        echo        "<th>$alamat</th>";
        echo        "<th>$jeniskelamin</th>";
        echo        "<th>$email</th>";
        echo        "<th>$jawab</th>";
        echo    "</tbody>";
        echo "</tr>:";
        echo "</table>";
    } else {
        echo "Maaf Jawaban Anda Salah <br>";
        echo '<a href="forminputdata.php">Ulang</a>';
    }
    ?>

</body>

</html>