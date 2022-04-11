<?php 
require_once 'Assets.php';

class Villa extends Assets{
    public $keterangan;
    public function __construct($nama, $tahun, $nilai, $keterangan){
        parent::__construct($nama, $tahun, $nilai);
        $this->keterangan = $keterangan;
    }
    public function cetak($ket=false){
        echo parent::cetak($this->keterangan);
    }
}
?>