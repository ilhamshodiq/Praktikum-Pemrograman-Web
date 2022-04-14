<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jadwal</title>
</head>

<body>
    <div class="container">
        <h1>Jadwal</h1>
        <table id="tabel" border="1">
            <tr>
                <th>No.</th>
                <th>Mata Kuliah</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Ruangan</th>
            </tr>
            <?php
            $no = 1;
            include "koneksi.php";
            $a = "SELECT * FROM jadwal, matkul WHERE jadwal.id_matkul=matkul.id_matkul";
            $b = $koneksi->query($a);
            while ($data = $b->fetch_array()) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nm_matkul'] ?></td>
                    <td><?php echo $data['hari'] ?></td>
                    <td><?php echo $data['jam'] ?></td>
                    <td><?php echo $data['ruang'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>