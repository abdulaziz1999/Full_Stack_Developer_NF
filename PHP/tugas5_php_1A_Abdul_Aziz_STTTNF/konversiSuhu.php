<?php
//  Buatlah Class KonversiSuhu dengan member class:
// - variabel : satuanSuhuAwal, besaranSuhu, satuanSuhuTujuan
// - konstruktor : satuanSuhuAwal, besaranSuhu, satuanSuhuTujuan
// - method : 
//   1. fungsi konversi dengan logika berdasarkan satuanSuhuAwal dan satuanSuhuTujuan 
//      (Gunakan rumus konveri suhu):
// 	  CelciusToFahrenheit 
// 	  FahrenheitToCelcius
// 	  CelciusToRheamur
// 	  RheamurToCelcius 
class KonversiSuhu{
    public $satuanSuhuAwal;
    public $besaranSuhu;
    public $satuanSuhuTujuan;
    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function konversi(){
        if($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit"){
            $hasil = $this->besaranSuhu * 1.8 + 32;
            return ceil($hasil)." $this->satuanSuhuTujuan";
        }else if($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius"){
            $hasil = ($this->besaranSuhu - 32) / 1.8;
            return ceil($hasil)." $this->satuanSuhuTujuan";
        }else if($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur"){
            $hasil = $this->besaranSuhu * 1.8 + 32;
            return ceil($hasil)." $this->satuanSuhuTujuan";
        }else if($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius"){
            $hasil = ($this->besaranSuhu - 32) / 1.8;
            return ceil($hasil)." $this->satuanSuhuTujuan";
        }else{
            return "Konversi tidak dapat dilakukan";
        }
    }

    //    2. fungsi cetak untuk mencetak:
    // 	  Satuan Suhu Awal, Besaran Suhu, Satuan Suhu Tujuan, Hasil Konversi Suhu
    // 	  memanggil fungsi konversi yang sudah dibuat di atasnya.
    // 	  Cetaklah data menggunakan format tabel. 
    public function cetak(){
        echo "<tr>
            <td>$this->satuanSuhuAwal</td>
            <td>$this->besaranSuhu</td>
            <td>$this->satuanSuhuTujuan</td>
            <td>".$this->konversi()."</td>
            </tr>";

    }
}
          


?>