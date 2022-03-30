<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@1,300&display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Kalkulatorku</title>
    </head>

    <body>
        <?php
//tangkap request form
$bil1 = $_REQUEST['a1'];
$bil2 = $_REQUEST['a2'];
$hitung = $_REQUEST['hitung'];
//buat fungsi hitung
function hitung($a1, $a2, $tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    else if($tombol == '-') $hasil = $a1 - $a2;
    else if($tombol == '*') $hasil = $a1 * $a2;
    else if($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}
?>

        <div class="card">
            <h1>Kalkulatorku</h1>
            <form action="#" method="POST">
                <div class="inputan">
                    <label for="a1">
                        Angka 1 &nbsp;: <input type="text" id="a1" name="a1" /> </label><br />
                    <label for="a2">
                        Angka 2 :
                        <input type="text" id="a2" name="a2" /> </label><br />
                    <label for="hasil">
                        Hasil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text" id="hasil" name="hasil" value="<?= hitung($bil1, $bil2, $hitung ) ?>"
                            disabled />
                    </label>
                </div>
                <div class="operator">
                    <input type="submit" name="hitung" value="+">
                    <input type="submit" name="hitung" value="-">
                    <input type="submit" name="hitung" value="*">
                    <input type="submit" name="hitung" value="/">
                    <input type="reset" value="Batal">
                </div>
            </form>
        </div>
    </body>

</html>


<?php
echo "<br />8 + 7 = ".hitung(8,7, "+");
echo "<br />8 - 7 = ".hitung(8,7, "-");
echo "<br />8 * 7 = ".hitung(8,7, "*");
echo "<br />8 / 2 = ".hitung(8,2, "/");
?>