<?php 
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','Kepala Bagian','Islam','Menikah');
$pegawai2 = new Pegawai('02103', 'Andre', 'Staff', 'Islam', 'Menikah');
$pegawai3 = new Pegawai('02129', 'Ali', 'Aisten Manager', 'Islam', 'Menikah');
$pegawai4 = new Pegawai('01502', 'Stevani', 'Kepala Bagian', 'Kristen Protestan', 'Belum Menikah');
$pegawai5 = new Pegawai('02508', 'Nabila', 'Manager', 'Islam', 'Menikah');

$_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($_pegawai as $pegawai){
    $pegawai->cetak();
}


?>