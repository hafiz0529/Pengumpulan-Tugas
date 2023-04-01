<?php
require_once 'Lingkaran_T7.php';
require_once 'PersegiPanjang_T7.php';
require_once 'SegiTiga_T7.php';

$bd_1 = new Lingkaran(28);
$bd_2 = new PersegiPanjang(8,4);
$bd_3 = new SegiTiga(4,6,6);
$bd_4 = new Lingkaran(10);
$bd_5 = new SegiTiga(8,6,8);
$bd_6 = new SegiTiga(4,4,8);

$_bangunDatar = [$bd_1,$bd_2,$bd_3,$bd_4,$bd_5,$bd_6];
$_judul = ['No', 'Nama Bangunan', 'Keliling','Luas'];

// foreach($_bangunDatar as $bangun_datar){
//     echo 'Nama Bangun Datar : ','<br>'.$bangun_datar->namaBidang();
//     echo 'Kelilingnya : '.$bangun_datar->kelilingBidang();
//     echo '<br>','Luasnya : '.$bangun_datar->luasBidang(), '<br>','<br>';
// }
?>

<table border="1" bgcolor="silver" cellpadding="7px" width="100%">
    <thead>
        <tr>
            <?php 
            foreach ($_judul as $j){  
            ?>
            <th><?= $j ?></th>
            <?php } ?>
         </tr>
    </thead>
    <tbody bgcolor="skyblue">
<?php
$no = 1;
foreach ($_bangunDatar as $bdtr){
?>
<tr>
<td><?= $no ?></td>
<td><?= $bdtr->namaBidang();?> </td>
<td><?= $bdtr->kelilingBidang();?> CM</td>
<td><?= $bdtr->luasBidang();?> CM<sup>2</sup></td>
</tr>
<?php
$no++;
}
?>
</tbody>
</table>