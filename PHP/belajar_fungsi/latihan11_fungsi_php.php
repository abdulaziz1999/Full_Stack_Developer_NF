<?php
$str = 'Belajar PHP di Kampus Merdeka Asyiik';
$str = strtoupper($str);
echo $str;
$str = strtolower($str);
echo '<br/>'.$str;
$str = ucfirst($str);
echo '<br/>'.$str;
$str = ucwords($str);
echo '<br/>'.$str;
echo '<hr/>';
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu','Apel'];
sort($ar_buah);
foreach ($ar_buah as $buah) {
    echo '<br/>'.$buah;
}
echo '<hr/>';
arsort($ar_buah);
foreach ($ar_buah as $buah) {
    echo '<br/>'.$buah;
}