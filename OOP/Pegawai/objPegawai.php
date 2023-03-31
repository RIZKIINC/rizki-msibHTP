<?php
require 'Pegawai.PHP';

$pegawai = new pegawai('01111', 'Andi', 'Manager', 'Islam', 'Menikah');

$ar_pegawai = [$pegawai];

foreach ($ar_pegawai as $pegawai){
    $pegawai-> cetak();
}


?>