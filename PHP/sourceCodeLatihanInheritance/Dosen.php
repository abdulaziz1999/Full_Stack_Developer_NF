<?php
require_once 'Person.php';
class Dosen extends Person{
    //member1 variabel
    private $nidn;
    private $gelar;
    //member2 konstruktor
    public function __construct($nama, $gender,$nidn, $gelar )
    {
        parent::__construct($nama, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }
    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<br/>NIDN :'.$this->nidn;
        echo '<br/>Gelar :'.$this->gelar;
        echo '<hr/>';
    }
}