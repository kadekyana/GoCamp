<?php
require "function.php";

if(isset($_POST["kirim"])){

    if(tambah_d($_POST) > 0){
        echo    "<script>
                alert('Data Berhasil Di Tambah !');
                document.location.href = 'read.php';
                </script>";
    }else{
        echo    "<script>
                alert('Data Gagal Di Tambah !');
                document.location.href = 'read.php';
                </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/edit.css">
</head>
<body>
    <div class="container">
        <div class="shadow p-3 rounded mx-auto" id="wrapper">
            <h1 class="text text-center">Form Tambah Data Destinasi</h1>
            <form action="" class="text" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan nama destinasi</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Masukkan alamat destinasi</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Masukkan Link / No Hub</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Masukkan deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-success" name="kirim">Kirim</button>
            <button class="btn btn-success float-end"><a href="read.php">Kembali</a></button>
            </form>
        </div>
    </div>
</body>
</html>