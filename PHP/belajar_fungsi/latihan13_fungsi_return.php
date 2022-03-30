<?php
//belajar fungsi define by user => return
function hitung($a, $b){
    $c = $a + $b;
    return $c;
}
//memanggil fungsi
$a1 = 10; $a2 = 30;
echo "<br/>$a1 + $a2 = ".hitung($a1, $a2);
echo "<br/>30 + 40 = ".hitung(30, 40);