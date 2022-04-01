<?php
require_once 'Hewan.php';
class Kucing extends Hewan{
    //member1 variabel
    public $nama;
    //member2 blank constructor
    public function __construct()
    {
    }
    //member3 method
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
    public function suara(){
        return 'Meoooongggg';
    }
    
}