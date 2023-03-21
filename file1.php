<?php

echo 'Hallo World';

// ini pemanggilan di PHP

// belajar variabel

$namaSiswa = "Rizki";
$umur = "21";
$berat_badan = 70.5;
$_pekerjaan = "Mahasiswa";

echo '<hr> ';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur : '.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo "<br> Pekerjaan : ".$_pekerjaan;
?>

<hr>
Nama Siswa : <?= $namaSiswa ?> <br>
Umur : <?= $umur ?> <br>
Berat Badan : <?= $berat_badan ?> <br>
Pekerjaan : <?= $_pekerjaan ?>
