<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Form Nilai</title>
    <style>
      table {
            border-radius: 1em;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <h1></h1>
    <!-- form method post -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 m-3">
                <!-- menggunkan card -->
                <div class="card">
                    <div class="card-header">
                        <h3>Form Nilai</h3>
                    </div>
                    <div class="card-body">
                        <form action="tugas2_php_2A_Abdul_Aziz_STTTNF.php" method="post" autocomplete="off">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="matpel">Mata Pelajaran</label>
                                <select class="form-control" id="matpel" name="matpel">
                                    <option selected disabled>Pilih Mata Pelajaran</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Fisika">Fisika</option>
                                </select>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="nilai">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-success mt-2 float-right" name="simpan"><i class="bi bi-save2-fill"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <!-- Kelulusan -->
    <?php
    if (isset($_POST['simpan'])) {
        $nama = @$_POST['nama'];
        $matpel = @$_POST['matpel'];
        $nilai = @$_POST['nilai'];
        $kelulusan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
        
        //if else grade
        if ($nilai >= 85 && $nilai <= 100) $grade = "A";
        else if ($nilai >= 75 && $nilai < 85) $grade = "B";
        else if ($nilai >= 60 && $nilai < 75) $grade = "C";
        else if ($nilai >= 30 && $nilai < 60) $grade = "D";
        else if ($nilai >= 0 && $nilai < 30) $grade = "E";

        //switch case predikat
        switch ($grade) {
            case "A":
                $predikat = "Sangat Baik";
                break;
            case "B":
                $predikat = "Baik";
                break;
            case "C":
                $predikat = "Cukup";
                break;
            case "D":
                $predikat = "Kurang";
                break;
            case "E":
                $predikat = "Sangat Kurang";
                break;
            default:
                $predikat = "-";
                break;
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-3 m-3">
                    <!-- menggunkan card -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Hasil Nilai</h3>
                        </div>
                        <!-- if else jika inputan kosong -->
                        <?php if ($nama == "" || $matpel == "" || $nilai == "") { ?>
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                <strong>Maaf!</strong> Inputan tidak boleh kosong.
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="card-body">
                            <!-- cetak menggunakan list -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-bold">Nama : <?= $nama ?></li>
                                <li class="list-group-item fw-bold">Mata Pelajaran : <?= $matpel ?></li>
                                <li class="list-group-item fw-bold">Nilai : <?= $nilai ?></li>
                                <li class="list-group-item fw-bold">Kelulusan : <?= $kelulusan ?></li>
                                <li class="list-group-item fw-bold">Grade : <?= $grade ?></li>
                                <li class="list-group-item fw-bold">Predikat : <?= $predikat ?></li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    <?php }?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>