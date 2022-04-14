<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jadwal</title>
</head>

<body>
    <form action="aksi.php" method="POST">
        <table>
            <tr>
                <td>Hari : </td>
                <td>
                    <select name="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam : </td>
                <td><input type="text" name="jam"></td>

            </tr>
            <tr>
                <td>Ruang : </td>
                <td><input type="text" name="ruang"></td>
            </tr>
            <tr>
                <td>Mata Kuliah : </td>
                <td>
                    <select name="matkul">
                        <?php
                        include "koneksi.php";
                        $a = "SELECT * FROM matkul";
                        $b = $koneksi->query($a);
                        while ($data = $b->fetch_array()) { ?>
                            <option value=<?php echo $data['id_matkul'] ?>> <?php echo $data['nm_matkul'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SAVE"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>