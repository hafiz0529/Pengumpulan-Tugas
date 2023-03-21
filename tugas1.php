<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Jajar Genjang</title>
</head>
<body>
<h2>Bangun Datar Jajar Genjang</h2>

<form method="POST">
    <table>
        <tr>
            <td>Alas</td>
            <td>
                <input type="number" name="alas" require>
            </td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>
                <input type="number" name="tinggi" require>
            </td>
        </tr>
        <!-- <tr>
            <td>Sisi Miring</td>
            <td>
                <input type="text" name="sisi_miring" require>
            </td>
        </tr> -->
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
            </td>
        </tr>
    </table>
</form>

<?php
    // Perhitungan

    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        // $sisi_miring = $_POST['sisi_miring'];

        $luas_jajargenjang = $alas * $tinggi;
        // $keliling_jajargenjang = 2 * ($alas + $sisi_miring);
        echo 'Hasil Perhitungan Luas Jajar Genjang';
        echo '<br> Diketahui : ';
        echo '<br> Alas : ' .$alas;
        echo '<br> Tinggi : ' .$tinggi;
        echo '<br> Hasil = ' .$luas_jajargenjang;

        echo '<hr><br><br>';
        
    }
    ?>

    <h2>Keliling Jajar Genjang</h2>
<form method="GET">
    <table>
        <tr>
            <td>Alas</td>
            <td>
                <input type="number" name="alas" require>
            </td>
        </tr>
        <!-- <tr>
            <td>Tinggi</td>
            <td>
                <input type="number" name="tinggi" require>
            </td>
        </tr> -->
        <tr>
            <td>Sisi Miring</td>
            <td>
                <input type="text" name="sisi_miring" require>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
            </td>
        </tr>
    </table>
</form>

<?php
    // Perhitungan

    if(isset($_GET['submit'])){
        $alas = $_GET['alas'];
        $sisi_miring = $_GET['sisi_miring'];
        // $tinggi = $_POST ['tinggi'];

        $keliling_jajargenjang = 2 * ($alas + $sisi_miring);
        echo 'Hasil Perhitungan Keliling Jajar Genjang';
        echo '<br> Diketahui : ';
        echo '<br> Alas : ' .$alas;
        echo '<br> Sisi Miring : ' .$sisi_miring;
        echo '<br> Hasil = ' .$keliling_jajargenjang;

    }
    ?>
</body>
</html>