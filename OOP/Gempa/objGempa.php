<?php
require 'Gempa.php';
$g1 = new Gempa('Banten',0.1);
$g2 = new Gempa('Tokyo',0.1);
$g3 = new Gempa('Tel aviv',0.1);
$g4 = new Gempa('Florida',0.1);

$ar_data = [$g1.$g2,$g3,$g4];

foreach ($ar_data ad $d){
    $d->cetak();
}

?>  