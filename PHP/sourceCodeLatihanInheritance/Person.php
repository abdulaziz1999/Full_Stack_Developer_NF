<?php
class Person{
//member1 variabel
private $nama;
private $gender;
//member2 konstruktor
public function __construct($nama, $gender)
{
    $this->nama = $nama;
    $this->gender = $gender;  
}
//member3 method
public function cetak(){
    echo 'Nama :'.$this->nama;
    echo '<br/>Jenis Kelamin :'.$this->gender;
}
}