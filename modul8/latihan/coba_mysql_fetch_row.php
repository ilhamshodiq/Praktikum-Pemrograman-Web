<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <td>Nama matak Kuliah</td>
            </thead>
        </tr>
        <tbody>
            <?php
            $no = 1;
            include "test_koneksi.php";
            $a = "SELECT * FROM matkul";
            $b = $koneksi->query($a);
            while ($c = $b->fetch_row()) {
            ?>
                <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $c['1']; ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>