<?php
require "function.php";

$id = $_GET["id_d"];

$data =  query("SELECT * FROM destinasi WHERE id_destinasi = $id")[0];

if(isset($_POST["kirim"])){

    if(edit_d($_POST) > 0){
        echo    "<script>
                alert('Data Berhasil Di Edit !');
                document.location.href = 'read.php';
                </script>";
    }else{
        echo    "<script>
                alert('Data Gagal Di Edit !');
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
            <h1 class="text text-center">Form Edit Data Destinasi</h1>
            <form action="" class="text" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id_destinasi"];?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data["nama_destinasi"];?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Masukkan alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $data["alamat_destinasi"];?>">
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Masukkan link</label>
                <input type="text" class="form-control" name="link" id="link" value="<?= $data["link_destinasi"];?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Masukkan deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="<?= $data["deskripsi_destinasi"];?>" id="deskripsi">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload gambar</label> <br>
                <img src="gambar/<?= $data["gambar"];?>" alt="" width="50px" height="50px">
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
            <button type="submit" class="btn btn-success" name="kirim">Edit Data</button>
            <button class="btn btn-success float-end"><a href="read.php">Kembali</a></button>
            </form>
        </div>
    </div>
</body>
</html>