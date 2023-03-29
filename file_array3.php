<?php 
$m1 = ['NIM'=>'01111021', 'Nama'=>'Andi', 'Nilai'=>80];
$m2 = ['NIM'=>'01111022', 'Nama'=>'Ani', 'Nilai'=>70];
$m3 = ['NIM'=>'01111023', 'Nama'=>'Ari', 'Nilai'=>50];
$m4 = ['NIM'=>'01111024', 'Nama'=>'Aji', 'Nilai'=>40];
$m5 = ['NIM'=>'01111025', 'Nama'=>'Ali', 'Nilai'=>90];
$m6 = ['NIM'=>'01111026', 'Nama'=>'Ai', 'Nilai'=>75];
$m7 = ['NIM'=>'01111027', 'Nama'=>'Budi', 'Nilai'=>30];
$m8 = ['NIM'=>'01111028', 'Nama'=>'Bani', 'Nilai'=>85];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];
?>

<table>
    <thead>

    <tr>
    <?php 
    foreach($ar_judul as $judul){
    ?>

        <th>
            <?= $judul ?>
        </th>

    <?php }?>
    </tr>
    
    </thead>
    <tbody>

    <?php
    $no = 1;
    foreach($mahasiswa as $mhs){
        $ket = ($mhs['Nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';

        // grade
        if($mhs['Nilai'] >= 85 && $mhs['Nilai'] <= 100) $grade ='A';
        else if($mhs['Nilai'] >= 75 && $mhs['Nilai'] <= 80) $grade ='B';
        else if($mhs['Nilai'] >= 60 && $mhs['Nilai'] <= 74) $grade ='C';
        else if($mhs['Nilai'] >= 30 && $mhs['Nilai'] <= 59) $grade ='D';
        else if($mhs['Nilai'] >= 0 && $mhs['Nilai'] <= 29) $grade ='E';
        else $grade = '';
    ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs ['NIM'] ?></td>
            <td><?= $mhs ['Nama'] ?></td>
            <td><?= $mhs ['Nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
        </tr>

    <?php $no++; } ?>
    </tbody>
    
</table>