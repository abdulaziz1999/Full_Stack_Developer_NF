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

    <title>Form Data Diri</title>
    <style>
    table {
        border-radius: 1em;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <!-- form method post -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 m-5">
                <!-- menggunkan card -->
                <div class="card">
                    <div class="card-header">
                        <h3>Form Data Diri</h3>
                    </div>
                    <div class="card-body">
                        <form action="tugas2_php_2B_Abdul_Aziz_STTTNF.php" method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="pekerjaan">Pekerjaan</label>
                                <select class="form-control" id="pekerjaan" name="pekerjaan">
                                    <option selected disabled>Pilih Pekerjaan Anda</option>
                                    <?php
                                    for ($i=1; $i <= 10; $i++) { 
                                        echo "<option value='pekerjaan $i'>Pekerjaan $i</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="hobby">Hobby</label>
                                <?php
                                $i= 1;
                                while ($i <= 10) { 
                                    echo "<div class='form-check'>
                                        <input class='form-check-input' type='radio' name='hobby' id='hobby$i' value='hobby $i'>
                                        <label class='form-check-label' for='hobby$i'>
                                            hobby $i
                                        </label>
                                    </div>";
                                    $i++;
                                }
                            ?>
                            </div>
                            <!-- align right tombol simpan -->
                            <button type="submit" class="btn btn-success mt-2 float-right" name="simpan"><i class="bi bi-save2-fill"></i> Simpan</button>
                        </form>
                    </div>

                </div>

                <!-- cetak di table -->
                <div class="col-md-12 mt-5">
                    <?php
                    if (isset($_POST['simpan'])) {
                        $nama = @$_POST['nama'];
                        $pekerjaan = @$_POST['pekerjaan'];
                        $hobby = @$_POST['hobby'];
                    ?>
                    <!-- menggunakan card table -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Diri</h3>
                        </div>
                        <!-- if else jika inputan kosong -->
                        <?php if ($nama == "" || $pekerjaan == "" || $hobby == "") { ?>
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                <strong>Maaf!</strong> Data tidak boleh kosong
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-white bg-success">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Hobby</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-light">
                                    <tr>
                                        <td><?= $nama ?></td>
                                        <td><?= $pekerjaan ?></td>
                                        <td><?= $hobby ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>

                        <?php }?>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous"></script>
</body>

</html>