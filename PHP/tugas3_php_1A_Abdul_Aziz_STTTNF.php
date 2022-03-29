<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Table Karyawan</title>
    <style>
    table {
        border-radius: 1em;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <?php
    $p1 = [
        'nip'=>'111', 
        'nama'=>'Andi', 
        'jabatan'=>'Manager',
        'divisi'=>'SDM',
        'agama'=>'Islam'
    ];
    $p2 = [
        'nip'=>'222', 
        'nama'=>'Budi', 
        'jabatan'=>'Asisten',
        'divisi'=>'SDM',
        'agama'=>'Kristen'
    ];
    $p3 = [
        'nip'=>'333', 
        'nama'=>'Caca', 
        'jabatan'=>'Kabag',
        'divisi'=>'SDM',
        'agama'=>'Hindu'
    ];
    $p4 = [
        'nip'=>'444', 
        'nama'=>'Dodi', 
        'jabatan'=>'Staff',
        'divisi'=>'SDM',
        'agama'=>'Budha'
    ];
    $p5 = [
        'nip'=>'555', 
        'nama'=>'Eko', 
        'jabatan'=>'Kabag',
        'divisi'=>'SDM',
        'agama'=>'Katolik'
    ];
    $p6 = [
        'nip'=>'666', 
        'nama'=>'Firman', 
        'jabatan'=>'Asisten',
        'divisi'=>'SDM',
        'agama'=>'Konghucu'
    ];
    $p7 = [
        'nip'=>'777', 
        'nama'=>'Gede', 
        'jabatan'=>'Manager',
        'divisi'=>'SDM',
        'agama'=>'Kristen'
    ];
    $p8 = [
        'nip'=>'888', 
        'nama'=>'Hadi', 
        'jabatan'=>'Staff',
        'divisi'=>'SDM',
        'agama'=>'Islam'
    ];
    $p9 = [
        'nip'=>'999', 
        'nama'=>'Icha', 
        'jabatan'=>'Manager',
        'divisi'=>'SDM',
        'agama'=>'Islam'
    ];
    $p10 = [
        'nip'=>'1010', 
        'nama'=>'Joko', 
        'jabatan'=>'Staff',
        'divisi'=>'SDM',
        'agama'=>'Budha'
    ];
    
$ar_pegawai = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];

$ar_judul = ['No','NIP','Nama','Agama','Jabatan','Divisi','Gaji Pokok','Tunjangan Jabatan','Gaji Kotor','Take Home Pay'];

    function jabatan($jabatan){
        switch ($jabatan) {
            case 'Manager':
                $gapok = 20000000;
                break;
            case 'Asisten':
                $gapok = 15000000;
                break;
            case 'Kabag':
                $gapok = 10000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }

    
    function tunjangan_jabatan($gapok){
        $tunjab = ($gapok * 0.2);
        return $tunjab;
    }
    
    function gaji_kotor($gapok, $tunjab){
        $gaji_kotor = $gapok + $tunjab;
        return $gaji_kotor;
    }
    
    function zakat($gaji_kotor, $agama){
        $zakat = ($agama == 'Islam' && $gaji_kotor >= 6000000) ? $gaji_kotor * 0.025 : 0;
        return $zakat;
    }

    function takeHomePay($gapok, $tunjab, $zakat){
        $takeHomePay = $gapok + $tunjab - $zakat;
        return $takeHomePay;
    }

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,1,'','.');
        return $hasil_rupiah;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <!-- //menampilkan data table dalam card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="text-white bg-success">
                                <tr>
                                <?php foreach($ar_judul as $judul): ?>
                                    <th><?= $judul ?></th>
                                <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($ar_pegawai as $p) : 
                                    $gapok = jabatan($p['jabatan']);
                                    $tunjab = tunjangan_jabatan($gapok);
                                    $gaji_kotor = gaji_kotor($gapok, $tunjab);
                                    $zakat = zakat($gaji_kotor, $p['agama']);
                                    $takeHomePay = takeHomePay($gapok, $tunjab, $zakat);
                                    
                                    //sum column gapok
                                    @$sum_gapok += $gapok;

                                    //sum column tunjab
                                    @$sum_tunjab += $tunjab;

                                    //sum column gaji_kotor
                                    @$sum_gaji_kotor += $gaji_kotor;

                                    //sum column takeHomePay
                                    @$sum_takeHomePay += $takeHomePay;
                                    ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p['nip'] ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['agama'] ?></td>
                                    <td><?= $p['jabatan'] ?></td>
                                    <td><?= $p['divisi'] ?></td>
                                    <td><?= rupiah($gapok) ?></td>
                                    <td><?= rupiah($tunjab) ?></td>
                                    <td><?= rupiah($gaji_kotor) ?></td>
                                    <td><?= rupiah($takeHomePay) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot class="text-white bg-success">
                                <tr>
                                    <td colspan="6">Total</td>
                                    <td><?= rupiah($sum_gapok) ?></td>
                                    <td><?= rupiah($sum_tunjab) ?></td>
                                    <td><?= rupiah($sum_gaji_kotor) ?></td>
                                    <td><?= rupiah($sum_takeHomePay) ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>