<?php

function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
//diketahui
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam'; // agama di indonesia
$jabatan = 'Manager'; // Manager, Asisten, Kabag, Staff
$status = 'Menikah'; // Menikah atau Belum
$jmlAnak = 4;

//gaji pokok
switch ($jabatan) {
    case 'Manager':
        $gajiPokok = 20000000;
        break;
    case 'Asisten':
        $gajiPokok = 15000000;
        break;
    case 'Kabag':
        $gajiPokok = 10000000;
        break;
    case 'Staff':
        $gajiPokok = 4000000;
        break;
    default:
        echo "Anda tidak memiliki jabatan";
        break;
}

//tunjangan jabatan
$tunjanganJabatan = $gajiPokok * 20 / 100;

//tunjangan keluarga
if ($status == 'Menikah' && $jmlAnak <= 2) $tunjanganKeluarga = $gajiPokok * 5 / 100;
elseif ($status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) $tunjanganKeluarga = $gajiPokok * 10 / 100;
else $tunjanganKeluarga = 0;

//gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

//zakat profesi
$zakatProfesi = ($agama == 'Islam' && $gajiKotor >= 6000000) ? $gajiKotor * 2.5 / 100 : 0;

//take home pay
$takeHomePay = $gajiKotor - $zakatProfesi;

//output
echo "Nama Pegawai : $namaPegawai <br>";
echo "Agama : $agama <br>";
echo "Jabatan : $jabatan <br>";
echo "Status : $status <br>";
echo "Jumlah Anak : $jmlAnak <br>";
echo "Gaji Pokok : ".rupiah($gajiPokok)."<br>";
echo "Tunjangan Jabatan : ".rupiah($tunjanganJabatan)."<br>";
echo "Tunjangan Keluarga : ".rupiah($tunjanganKeluarga)." <br>";
echo "Gaji Kotor : ".rupiah($gajiKotor)." <br>";
echo "Zakat Profesi : ".rupiah($zakatProfesi)." <br>";
echo "Take Home Pay : ".rupiah($takeHomePay)." <br>";

?>