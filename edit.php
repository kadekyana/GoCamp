<?php
require "function.php";

$id = $_GET["id"];

$data =  query("SELECT * FROM barang WHERE id_barang = $id")[0];

if(isset($_POST["kirim"])){

    if(edit($_POST) > 0){
        echo    "<script>
                alert('Data Berhasil Di Edit !');
                document.location.href = 'barang.php';
                </script>";
    }else{
        echo    "<script>
                alert('Data Gagal Di Edit !');
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
            <h1 class="text text-center">Form Edit Data Barang</h1>
            <form action="" class="text" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id_barang"];?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data["nama_barang"];?>">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Masukkan jumlah</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $data["jumlah_barang"];?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Masukkan harga</label>
                <input type="number" class="form-control" name="harga" id="harga" value="<?= $data["harga_barang"];?>">
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Masukkan kapasitas</label>
                <input type="text" class="form-control" name="kapasitas" value="<?= $data["kapasitas_barang"];?>" id="kapasitas">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Masukkan ukuran</label>
                <input type="text" class="form-control" name="ukuran" value="<?= $data["ukuran_barang"];?>" id="ukuran">
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Masukkan bahan</label>
                <input type="text" class="form-control" name="bahan" value="<?= $data["bahan_barang"];?>" id="bahan">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload gambar</label> <br>
                <img src="gambar/<?= $data["gambar_barang"];?>" alt="" width="50px" height="50px">
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
            <button type="submit" class="btn btn-success" name="kirim">Edit Data</button>
            <button class="btn btn-success float-end"><a href="read.php">Kembali</a></button>
            </form>
        </div>
    </div>
</body>
</html>