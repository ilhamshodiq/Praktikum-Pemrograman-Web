<?php
$a = $_POST['nama'];
$b = $_POST['alamat'];
$c = $_POST['tanggallahir'];
$d = $_POST['jk'];
$e = $_POST['pekerjaan'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
</head>

<body>
    <table border="1">
        <tr>
            <thead>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <th><?php echo $a; ?></th>
                <th><?php echo $b; ?></th>
                <th><?php echo $c; ?></th>
                <th><?php echo $d; ?></th>
                <th><?php echo $e; ?></th>
            </tbody>
        </tr>
    </table>
</body>

</html>