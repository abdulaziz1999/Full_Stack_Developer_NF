<?php
require_once 'Piano.php';
require_once 'Seruling.php';
require_once 'Gitar.php';
require_once 'Pianika.php';

//ciptakan object
$m1 = new Piano();
$m2 = new Seruling();
$m3 = new Gitar();
$m4 = new Pianika();

$m1->tekan(); $m2->tiup(); $m3->petik();
$m4->tiup(); $m4->tekan();