<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Data Bidang</title>
</head>

<body>
<?php
require_once "Lingkaran.php";
require_once "PersegiPanjang.php";
require_once "Segitiga.php";

$lingkaran = new Lingkaran(10);
$persegi = new PersegiPanjang(10, 10);
$segitiga = new Segitiga(10, 10);
$lingkaran2 = new Lingkaran(20);
$persegi2 = new PersegiPanjang(9, 8);
$segitiga2 = new Segitiga(5, 9);
$lingkaran3 = new Lingkaran(28);
$persegi3 = new PersegiPanjang(3, 8);
$segitiga3 = new Segitiga(5, 4);
$segitiga4 = new Segitiga(4, 7);

$judul = array("No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang");
$bidang = [$lingkaran, $persegi, $segitiga, $lingkaran2, $persegi2, $segitiga2, $lingkaran3, $persegi3, $segitiga3, $segitiga4];

            
?>
        <!-- Buat table di dalam card dan di bungkus container -->
        <div class="container center mt-5 ">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h3>Data Bidang</h3>
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
                            <?php $no=1; foreach($bidang as $b){ ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $b->namaBidang()?></td>
                                <td><?= $b->keterangan()?></td>
                                <td><?= $b->luasBidang()?></td>
                                <td><?= $b->kelilingBidang()?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
