<?php 
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
    private $alas;
    private $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        return "Segitiga";
    }
    public function luasBidang(){
        return $this->alas*$this->tinggi/2;
    }
    public function kelilingBidang(){
        return $this->alas*3;
    }

    public function keterangan(){
        return "alas ".$this->alas." dan tinggi ".$this->tinggi;
    }
}
?>