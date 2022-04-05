<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buku Tamu</title>
</head>

<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <table id="tabel">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
            </tr>
            <?php
            $no = 1;
            include "koneksi.php";
            $a = "SELECT * FROM bukutamu";
            $b = $koneksi->query($a);
            while ($data = $b->fetch_array()) { ?>
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['komentar']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>