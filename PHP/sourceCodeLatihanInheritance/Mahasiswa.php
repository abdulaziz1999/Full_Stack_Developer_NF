<?php
require_once 'Person.php';
class Mahasiswa extends Person{
    //member1 variabel
    private $semester;
    private $jurusan;
    //member2 konstruktor
    public function __construct($nama, $gender, $semester, $jurusan)
    {
        parent::__construct($nama, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }
    //member3 method
    public function cetak(){
        parent::cetak();
        echo '<br/>Semester :'.$this->semester;
        echo '<br/>Jurusan :'.$this->jurusan;
        echo '<hr/>';
    }
}