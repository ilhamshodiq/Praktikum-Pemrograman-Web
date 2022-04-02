<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body>

    <body>
        <?php
        $nama = "Ilham Shodiq Mu'arif Billah";
        $alamat = "Desa Sogaan, Kec.Pakuniran, Kab.Probolinggo";
        $tanggallahir = "12 April 2003";
        $jeniskelamin = "Laki-Laki";
        $pekerjaan = "Mahasiswa";
        ?>
        <table border="1">
            <tr">
                <thead">
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    </thead>
                    </tr>
                    <tr>
                        <tbody>
                            <th><?php echo $nama; ?></th>
                            <th><?php echo $alamat; ?></th>
                            <th><?php echo $tanggallahir; ?></th>
                            <th><?php echo $jeniskelamin; ?></th>
                            <th><?php echo $pekerjaan; ?></th>
                        </tbody>
                    </tr>
        </table>
    </body>
</body>

</html>