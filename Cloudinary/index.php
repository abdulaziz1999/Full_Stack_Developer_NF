<?php 
require 'vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
Configuration::instance([
    'cloud' => [
      'cloud_name' => 'dqm', 
      'api_key' => '534844112787647', 
      'api_secret' => 'mw5DwnqyytWXDIRXbJIMbbUuHdA'],
    'url' => [
      'secure' => true]]);
  
// $data = (new UploadApi())->upload('petik.png');
// echo "Url : " . $data['secure_url'];
// echo "<br>";
// echo "Public Id : " . $data['public_id'];

//  if(isset($_POST['simpan'])){
//     $nama = $_POST['nama'];
//     $slug = $_POST['slug'];
//     $gambar = $_FILES['file']['name'];
//     $tmp = $_FILES['file']['tmp_name'];
// }       

?>
<img src="https://res.cloudinary.com/dqm/image/upload/v1649783279/ibybmyif9awwyxjul3rk.png">
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="slug" placeholder="Slug">
        <input type="file" name="file">
        <input type="submit" name="simpan" value="Simpan">
    </form>
    <img src="https://res.cloudinary.com/demo/image/upload/cld-sample">
</body>
</html> -->