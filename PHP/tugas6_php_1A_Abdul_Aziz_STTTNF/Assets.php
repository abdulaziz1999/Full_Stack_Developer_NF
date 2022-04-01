<?php 
    class Assets{
        private $nama;
        private $tahun;
        public $nilai;

        public function __construct($nama, $tahun, $nilai){
            $this->nama = $nama;
            $this->tahun = $tahun;
            $this->nilai = $nilai;
        }
        
        function cetak($ket){
            echo "<td>$this->nama</td>
                  <td>$this->tahun</td>
                  <td>$ket</td>
                  <td>".$this->rupiah()."</td>";
        }

        function rupiah(){
            return "Rp. ".number_format($this->nilai, 0, ',', '.');
        }
    }