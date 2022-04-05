<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database mySQL</title>
</head>
<body>
    <h1>Demo Koneksi database MySQL</h1> 
    <?php
    $host = "localhost";//host
    $username = "root";//user
    $password = "";//password
    $database = "db_akademik";//nama db
    $koneksi = mysqli_connect($host, $username, $password, $database);
    if ($koneksi) {
        echo "OK";
    }else {
        echo "Server not connected";
    }
    ?>
</body>
</html>