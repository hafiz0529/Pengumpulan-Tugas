<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
<form method="post">
    <h3>Rincian Gaji Pegawai</h3>
    <label>Nama </label>
    <input type="text" name="nama" placeholder="Masukan Nama Pegawai"> <br><br>
    <label>Agama </label>
        <select name="agama">
        <option>---- Pilih Agama ----</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        </select> <br><br>
    <label>Jabatan </label>
        <select name="jabatan">
            <option>---- pilih jabatan ----</option>
            <option value="Manager">Manager </option>
            <option value="Asisten Manager">Asisten Manager</option>
            <option value="Kepala Bagian">Kepala Bagian</option>
            <option value="Staff">Staff</option>
        </select><br><br>
    <label >Status </label>
    <select name="status">
        <option >---- Pilih Status ----</option>
        <option value="Sudah Menikah">Sudah Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
    </select><br><br>
    <label >Jumlah Anak</label>
    <input type="number" name="jmlh_anak"><br><br>
    <button name="proses" type="submit">Cek</button>
</form>

<?php
$nama = $_POST ['nama'];
$agama = $_POST ['agama'];
$jabatan = $_POST ['jabatan'];
$status = $_POST ['status'];
$jmlh_anak = $_POST ['jmlh_anak'];
$tombol = $_POST['proses'];
$pokok = '0';

switch($jabatan){
    case 'Manager' : $pokok = 20000000; break;
    case 'Asisten Manager' : $pokok = 15000000; break;
    case 'Kepala Bagian' : $pokok = 10000000; break;
    case 'Staff' : $pokok = 4000000; break;
    default : $pokok = '0';
}
// TUNJANGAN JABATAN
if ($jabatan == 'Manager'){
    $tunjangan_j = $pokok * 0.2;
}
elseif ($jabatan == 'Asisten Manager'){
    $tunjangan_j = $pokok * 0.2;
}
elseif ($jabatan == 'Kepala Bagian'){
    $tunjangan_j = $pokok * 0.2;
}
elseif ($jabatan == 'Staff'){
    $tunjangan_j = $pokok * 0.2;
}
else {
    $tunjangan_j = 0;
}

//TUNJANGAN KELUARGA

if ($status == 'Sudah Menikah' && $jmlh_anak >=1 && $jmlh_anak <=2){
    $tunjangan_K = $pokok * 0.05;
}
elseif ($status == 'Sudah Menikah' && $jmlh_anak >=3 && $jmlh_anak <=5){
    $tunjangan_K = $pokok * 0.1;
}
elseif ($status == 'Belum Menikah'){
    $tunjangan_K = 0;
}
else {
    $tunjangan_K = 0;
}

$gaji_pokok = $pokok + $tunjangan_j + $tunjangan_K;

// ZAKAT
if ($agama == 'Islam' && $gaji_pokok > 6000000) {
    $zakat = $gaji_pokok * 0.025;
}
else {
    $zakat = 0;
}

$total_gaji = $gaji_pokok - $zakat;

if(isset($tombol)){
    ?>
    Nama Pegawai : <?= $nama ?>
    <br> Agama : <?= $agama ?>
    <br> Jabatan : <?= $jabatan ?>
    <br> Status : <?= $status ?> Dan Jumlah Anak : <?= $jmlh_anak ?>
    <br> Gaji Pokok : <?= $gaji_pokok ?>
    <br> Total Gaji : <?= $total_gaji ?>

    <?php } ?>

</body>
</html>