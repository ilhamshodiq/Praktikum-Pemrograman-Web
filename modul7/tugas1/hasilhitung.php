<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung</title>
</head>

<body>
    <?php
    $value1 = $_POST['tfvalue1'];
    $value2 = $_POST['tfvalue2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case 'tambah':
            $hasil = $value1 + $value2;
            break;
        case 'kurang':
            $hasil = $value1 - $value2;
            break;
        case 'kali':
            $hasil = $value1 * $value2;
            break;
        case 'bagi':
            $hasil = $value1 / $value2;
            break;
        case 'modulus':
            $hasil = $value1 % $value2;
            break;
        default:
            echo "ada Error";
            break;
    }
    echo "Hasil Operator $operator adalah $hasil";
    ?>
</body>

</html>