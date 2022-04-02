<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>

<body>
    <form action="hasilinputdata.php" method="POST">
        <h1>FORM INPUT DATA</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" id="cowok" name="jeniskelamin" value="Cowok">Cowok
                    <input type="radio" id="cewek" name="jeniskelamin" value="Cewek"> Cewek
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>      
            <tr>
                <td>Hitung</td>
                <td>1 + 8</td>
            </tr>
            <tr>
                <td>Jawab</td>
                <td><input type="text" name="jawab"></td>
            </tr>            
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>