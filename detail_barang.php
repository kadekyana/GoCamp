<?php
session_start();
require 'function.php';
$id = $_GET['id'];
$data = query("SELECT * FROM barang WHERE id_barang = $id")[0];

// if(!isset($_SESSION['admin']) OR ($_SESSION['user'])){
//   header("Location: detail_barang?id=$id");
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoCamp || Page Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body style="background-color:#273036 ;">

    <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #61764b ">
            <div class="container">
              <div class="logo">
                  <img src="asset/foto/logo.png" alt="" width="40" height="25" style="margin: 0 5px 5px 5px;" />
                  <a class="navbar-brand" href="index.php">GoCamp</a>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#sewa">Sewa</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="destinasi.php">Dest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    <!-- End Navbar -->

<!-- Sewa Katalog -->
    <div class="container" style="padding-top: 10%;" >
    <h2 class="text text-center mb-4" style="color: whitesmoke;">Detail Pesanan</h2>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <img src="gambar/<?= $data['gambar_barang'];?>" class="card-img-top rounded" alt="...">
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color:#FAD6A5 ;">
                      <h4 class="card-title text-center" style="font-weight: bold ;"><?= $data['nama_barang'];?></h4>
                      <hr>
                      <h6 class="text text-center mb-3">Rp.<?= number_format($data['harga_barang'],'0',',',',');?></h6>
                      <p class="card-text text-justify" style="font-size: 14px;">Jumlah Barang Tersedia : <?= $data['jumlah_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Kapasitas : <?= $data['kapasitas_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Ukuran : <?= $data['ukuran_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Bahan : <?= $data['bahan_barang'];?></p>
                        <div class="d-grid">
                          <a href="https://wa.me/6281239974221" class="btn btn-success">Pesan Via Whatapps</a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
    <!-- End Sewa Katalog -->

    <!-- About Session -->
    <section class="contact" id="contact">
      <div class="jumbotron jumbotron-fluid" style="background-image: url(asset/foto/contact.png); background-size: cover; background-position: center; width: 100%; height: 100vh; overflow: hidden;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,80C384,107,480,181,576,213.3C672,245,768,235,864,197.3C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container">
          <h1 class="display-4 text-center">Contact Us</h1>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <h3>Alamat</h3>
              <p class="lead text-center mt-3" style="color:white ;">Jalan Pulau Bali, Gang 1D, Kecamatan, Kecamatan Buleleng, Kabupaten Buleleng </p>
            </div>
            <div class="col-md-4">
              <h3>Media Sosial</h3>
              <p class="lead text-center mt-3" style="color:white ;">Whatapps : 081239974221 and 083114146297</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Session -->
    <script ../="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
