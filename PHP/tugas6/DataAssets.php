<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Data Assets</title>
</head>

<body>
    <?php
require_once "Rumah.php";
require_once "Villa.php";
require_once "Mobil.php";
require_once "Motor.php";
require_once "LogamMulia.php";
require_once "Berlian.php";
  
$rumah = new Rumah("Rumah",  2000, 100000000, "Type 36/72");
$villa1 = new Villa("Villa", 2001, 200000000, "Puncak Bogor");
$villa2 = new Villa("Villa", 2001, 250000000, "Bali");
$mobil1 = new Mobil("Mobil", 2002, 2000000000, "Ferari");
$mobil2 = new Mobil("Mobil", 2002, 1000000000, "Lanborghini");
$motor1 = new Motor("Motor", 2003, 34000000, "Aerox");
$motor2 = new Motor("Motor", 2003, 24000000, "Vario");
$logam1 = new LogamMulia("Logam Mulia", 2004, 100000000, "10 Kg");
$logam2 = new LogamMulia("Logam Mulia", 2004, 50000000, "5 Kg");
$berlian = new Berlian("Berlian",2005, 10000000, "5 Kg");

$judul = array("No","Nama", "Tahun", "Keterangan", "Nilai");
$asset = array($rumah, $villa1, $villa2, $mobil1, $mobil2, $motor1, $motor2, $logam1, $logam2, $berlian);

            
?>
        <!-- Buat table di dalam card dan di bungkus container -->
        <div class="container center mt-5 ">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h3>Data Assetku</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-light table-hover border-secondary">
                        <thead class="table-warning">
                            <tr >
                                <?php foreach($judul as $j){ ?>
                                <th><?= $j ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($asset as $a){ ?>
                            <tr>
                                <td><?= $no++?></td>
                                <?= $a->cetak() ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot class="table-success ">
                            <tr>
                                <th colspan="4" class="text-center">Total Asset</th>
                                <th><?= "Rp ".number_format(array_sum(array_column($asset, 'nilai')), 0, ',', '.') ?></th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
