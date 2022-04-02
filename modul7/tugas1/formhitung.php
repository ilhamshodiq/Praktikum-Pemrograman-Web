<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung</title>
</head>

<body>
    <h1>FORM HITUNG</h1>
    <form action="hasilhitung.php" method="POST">
        <label for="tfvalue1">Value 1 </label>
        <input type="text" name="tfvalue1" size="18">
        <br><br>
        <label for="tfvalue2">Value 2</label>
        <input type="text" name="tfvalue2" size="18">
        <br><br>
        <label for="operator">Operator </label>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <option value="modulus">%</option>
        </select>
        <br><br>
        <input type="Submit" value="Hitung"> <input type="reset" value="Clear">
    </form>
</body>

</html>