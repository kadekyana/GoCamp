<?php
require 'function.php';
$data = query("SELECT * FROM barang");

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

<!-- Carousel -->
<section id="sewa">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/foto/cor1.png" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block ">
          <h5>First slide label</h5>
          <p style="margin-bottom: 25% ;">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/foto/cor2.png" class="d-block w-100"  alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p style="margin-bottom: 25% ;">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/foto/cor3.png" class="d-block w-100"  alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p style="margin-bottom: 25% ;">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- end Carousel -->

<!-- Sewa Katalog -->
    <div class="container" >
        <div class="row">
                <h1 class="text text-center mt-5 mb-5" style="color: whitesmoke;">REKOMENDASI SEWA <br> PRODUK KATALOG</h1>
        </div>
        <div class="row justify-content-center">
          <?php foreach($data as $b):?>
          <div class="col-lg-3 col-sm-6 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="gambar/<?= $b['gambar_barang'];?>" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color:#FAD6A5 ;">
                      <h4 class="card-title text-center" style="font-weight: bold ;"><?= $b['nama_barang'];?></h4>
                      <hr>
                      <h6 class="text text-center mb-3">Rp.<?= number_format($b['harga_barang'],'0',',',',');?></h6>
                      <p class="card-text text-justify" style="font-size: 14px;">Jumlah Barang Tersedia : <?= $b['jumlah_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Kapasitas : <?= $b['kapasitas_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Ukuran : <?= $b['ukuran_barang'];?></p>
                      <p class="card-text text-justify" style="font-size: 14px;">Bahan : <?= $b['bahan_barang'];?></p>
                        <div class="d-grid">
                          <a href="detail_barang.php?id=<?= $b['id_barang'];?>" class="btn btn-success">Sewa</a>
                        </div>
                    </div>
                </div>
              </div>
              <?php endforeach;?>
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
