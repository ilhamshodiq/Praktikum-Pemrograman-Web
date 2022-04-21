<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Hitung</legend>
            <label for="nilai">Nilai : </label>
            <input type="number" name="nilai" size="18">
            <br><br>
            <input type="Submit" value="Hitung" name="tombolsubmit"> <input type="reset" value="Clear">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['tombolsubmit'])) { //cheapakah tombol submit ditekan
        include "koneksi.php"; // koneksi ke db
        $nilai = $_POST['nilai']; //nilai input
        $proses = $nilai / 2; //proses = nilai dibagi 2
        if ($nilai % 2 == 0) { //cek jika nilai genap
            $hasil = $proses; //outpunya adalah = nilai/2
        } else {
            $hasil = $nilai; //outpunya adalah = nilaiinputnya
        }
        $sql = "INSERT INTO quiz (inputnilai, outputnilai) VALUES ('$nilai', '$hasil')"; //input nilai ke db
        $koneksi->query($sql); //eksekusi query
        // echo "hasilnya : ", $hasil;
        $a = "SELECT outputnilai FROM quiz WHERE inputnilai = $nilai"; //ambil nilai dari db
        $b = $koneksi->query($a); //eksekusi query
        while ($data = $b->fetch_array()) { //ambil data dari db
            echo "hasilnya : ", $data['outputnilai']; //tampilkan hasilnya
        }
    }
    ?>
</body>

</html>