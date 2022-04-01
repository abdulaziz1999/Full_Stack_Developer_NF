<?php
require_once 'Harimau.php';
require_once 'Kucing.php';
//ciptakan object
$jerry = new Kucing();
$bob = new Harimau();
//use function
$jerry->setNama('Jerry'); $jerry->setWarna('Orange'); $jerry->setJenis('Jinak');
$bob->setNama('Bob'); $bob->setWarna('Loreng Orange Hitam'); $bob->setJenis('Buas');
//cetak
echo '<p>Kucingku bernama :'.$jerry->getNama().
'<br/>Warna : '.$jerry->getWarna().
'<br/>Jenis : '.$jerry->getJenis().
'<br/>Suara : '.$jerry->suara().'</p>';
echo '<hr/>';
echo '<p>Harimauku bernama :'.$bob->getNama().
'<br/>Warna : '.$bob->getWarna().
'<br/>Jenis : '.$bob->getJenis().
'<br/>Suara : '.$bob->suara().'</p>';