<?php
require "function.php";

if(isset($_POST["kirim"])){

    if(tambah($_POST) > 0){
        echo    "<script>
                alert('Data Berhasil Di Tambah !');
                document.location.href = 'barang.php';
                </script>";
    }else{
        echo    "<script>
                alert('Data Gagal Di Tambah !');
                document.location.href = 'barang.php';
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
            <h1 class="text text-center">Form Tambah Data Barang</h1>
            <form action="" class="text" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan nama barang</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Masukkan jumlah barang</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Masukkan harga</label>
                <input type="text" class="form-control" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Masukkan kapasitas</label>
                <input type="text" class="form-control" name="kapasitas" required>
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Masukkan ukuran</label>
                <input type="text" class="form-control" name="ukuran" required>
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Masukkan bahan</label>
                <input type="text" class="form-control" name="bahan" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <button type="submit" class="btn btn-success" name="kirim">Kirim</button>
            <button class="btn btn-success float-end"><a href="read.php">Kembali</a></button>
            </form>
        </div>
    </div>
</body>
</html>