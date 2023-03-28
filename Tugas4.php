<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>

    <style>
        table, td, th{
            border : 1px solid;
            text-align : center;
            padding : 7px;
        }
        table{
            border-collapse : collapse;
            width : 100%; 
            margin-top : 15px;
        }
        thead {
            background-color : Gainsboro;
        }
        tfoot{
            border-bottom : 1px solid;
            background-color : 	Silver;
        }
        tr:hover {background-color: coral;}
    </style>
</head>

<body>
<?php
$m1 = ['NIM' => '0111021', 'nama' => 'Andi', 'nilai' => 90];
$m2 = ['NIM' => '0111022', 'nama' => 'Ando', 'nilai' => 87];
$m3 = ['NIM' => '0111023', 'nama' => 'Andini', 'nilai' => 92];
$m4 = ['NIM' => '0111024', 'nama' => 'Andro', 'nilai' => 83];
$m5 = ['NIM' => '0111025', 'nama' => 'Andrea', 'nilai' => 76];
$m6 = ['NIM' => '0111026', 'nama' => 'Aulia', 'nilai' => 94];
$m7 = ['NIM' => '0111027', 'nama' => 'Annisa', 'nilai' => 89];
$m8 = ['NIM' => '0111028', 'nama' => 'Amel', 'nilai' => 81];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$jumlah_mahasiswa = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa,'nilai');
$sum_nilai = array_sum($jumlah_nilai);
$nilai_rata2 = $sum_nilai/$jumlah_mahasiswa;
$max_nilai = max($jumlah_nilai);
$min_nilai = min($jumlah_nilai);
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Niali Tertingg'=>$max_nilai,
    'Niali Terendah'=>$min_nilai,
    'Nilai Rata-rata '=>$nilai_rata2
]

?>

<table>
    <thead>
        <tr>
            <?php 
            foreach($_judul as $judul){
                ?>
                <th><?= $judul?> </th>
                <?php }?>
        </tr>
    </thead>
<tbody>
    <?php
    $no =1;
    foreach($mahasiswa as $mhs){
    
    $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
    //grade 
    if ($mhs['nilai'] >= 90 && $mhs['nilai'] <= 100) $grade = 'A';
    else if ($mhs['nilai']>= 80 && $mhs['nilai'] < 90) $grade = 'B';
    else if ($mhs['nilai']>= 70 && $mhs['nilai'] < 80) $grade = 'C';
    else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 70) $grade = 'D';
    else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 60) $grade = 'E';
    else $grade = '';

    switch ($grade){
        case "A" : $predikat = "Memuaskan"; break;
        case "B" : $predikat = "Bagus"; break;
        case "C" : $predikat = "Cukup"; break;
        case "D" : $predikat = "Kurang"; break;
        case "E" : $predikat = "Buruk"; break;
        default: $predikat ="";
    }
        ?>
        <tr>
            <td> <?= $no?></td>
            <td> <?= $mhs['NIM']?></td>
            <td> <?= $mhs['nama']?></td>
            <td> <?= $mhs['nilai']?></td>
            <td> <?= $ket ?></td>
            <td> <?= $grade?></td>
            <td> <?=$predikat?></td>
            
        </tr>
    <?php $no++; } ?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket =>$hasil){
?>
<tr>
    <th colspan="6"><?= $ket ?></th>
    <th><?= $hasil ?></th>

    </tr>
<?php } ?>
</tfoot>
</table>
</body>
</html>
