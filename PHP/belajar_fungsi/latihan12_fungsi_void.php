<?php
//fungsi define by user => void (tidak mengembalikan nilai)
//tanpa parameter/argument
function salam(){
    echo '<br/>Selamat Pagi Teman2';
}
//Dengan parameter/argument
function sapa($kawan){
    echo '<br/>Selamat Pagi '.$kawan;
}
//Dengan nilai default
function kabar($kawan='Budi'){
    echo '<br/>Hai Apa Kabar '.$kawan.'?';
}
//Eksekusi fungsi2 di atas
salam();
$nama = 'Deden';
//sapa('Siti');
sapa($nama);
kabar();
kabar('Ahmad');
$siswa = 'Alex';
kabar($siswa);