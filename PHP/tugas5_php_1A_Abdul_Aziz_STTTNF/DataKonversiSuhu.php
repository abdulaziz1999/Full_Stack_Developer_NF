<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Home</title>
</head>
<body>
<?php
require_once("konversiSuhu.php");

//  Buatlah object dataKonversiSuhu:
// - buatlah minimal masing2 konveri suhu minimal 2 buah dari masing-masing konveri suhu
// - panggil fungsi cetak untuk seluruh object yang diciptakan   
$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 20, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Rheamur", 50, "Celcius");
$dataKonversiSuhu3 = new KonversiSuhu("Fahrenheit", 100, "Rheamur");
$dataKonversiSuhu4 = new KonversiSuhu("Celcius", 30, "Rheamur");
$dataKonversiSuhu5 = new KonversiSuhu("Rheamur", 40, "Fahrenheit");
$dataKonversiSuhu6 = new KonversiSuhu("Fahrenheit", 50, "Celcius");
$dataKonversiSuhu7 = new KonversiSuhu("Rheamur", 30, "Fahrenheit");
$dataKonversiSuhu8 = new KonversiSuhu("Celcius", 40, "Rheamur");
$dataKonversiSuhu9 = new KonversiSuhu("Fahrenheit", 60, "Celcius");
$dataKonversiSuhu10 = new KonversiSuhu("Rheamur", 20, "Celcius");

            
?>
<!--  table boostrap  -->
<div class="container center mt-5 ">
    <div class="card">
        <div class="card-header">
            <h3>Table konversi suhu</h3>
        </div>
        <div class="card-body">
            <?php
            echo "<table class='table table-striped table-light table-hover border-primary'>
            <thead class='table-success'>
                <tr>
                    <td>Satuan Suhu Awal</td>
                    <td>Besaran Suhu</td>
                    <td>Satuan Suhu Tujuan</td>
                    <td>Hasil Konversi Suhu</td>
                </tr>
            </thead>
            <tbody>";
                $dataKonversiSuhu1->cetak();
                $dataKonversiSuhu2->cetak();
                $dataKonversiSuhu3->cetak();
                $dataKonversiSuhu4->cetak();
                $dataKonversiSuhu5->cetak();
                $dataKonversiSuhu6->cetak();
                $dataKonversiSuhu7->cetak();
                $dataKonversiSuhu8->cetak();
                $dataKonversiSuhu9->cetak();
                $dataKonversiSuhu10->cetak();
            echo "</tbody>
            </table>";
            ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>