<?php 
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
    private $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        return "Lingkaran";
    }
    public function luasBidang(){
        return pow($this->jari2,2)*3.14;
    }
    public function kelilingBidang(){
        return $this->jari2*2*3.14;
    }
    public function keterangan(){
        return "jari-jari ".$this->jari2;
    }
}
?>