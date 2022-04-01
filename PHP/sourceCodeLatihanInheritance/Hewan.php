<?php
class Hewan{
    //member1 variabel
    public $warna;
    public $jenis;
    //member2 blank constructor
    public function __construct()
    {  
    }
    //member3 setter & getter function
    public function setWarna($warna){
        $this->warna = $warna;
    }
    public function getWarna(){
        return $this->warna;
    }
    public function setJenis($jenis){
        $this->jenis = $jenis;
    }
    public function getJenis(){
        return $this->jenis;
    }
}