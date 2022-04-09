<?php
require_once 'Kambing.php';
require_once 'Ayam.php';
require_once 'Bebek.php';

//ciptakan object
$s1 = new Kambing();
$s2 = new Ayam();
$s3 = new Bebek();
//panggil method
echo '<h3>'.$s1->jenis().'</h3>';
$suara_hewan = [$s1, $s2, $s3];
foreach($suara_hewan as $hewan){
    echo $hewan->bersuara();
}