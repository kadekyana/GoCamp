<?php
session_start();
require 'function.php';
$data = query("SELECT * FROM destinasi");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page-Start || GoCamp</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #61764b ">
      <div class="container">
        <div class="logo">
            <img src="asset/foto/logo.png" alt="" width="40" height="25" style="margin: 0 5px 5px 5px;" />
            <a class="navbar-brand" href="">GoCamp</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#hero" id="a">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rent.php" id="a">Sewa</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="destinasi.php" id="a">Dest</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" id="a">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" id="a">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron / Hero Session -->
    <section class="hero" id="hero">
        <div class="jumbotron" id="jumbotron" style="background-image: url(asset/foto/jumbotron.png); background-size: cover; background-position: center; width: 100%; height: 100vh; overflow: hidden;">
            <h1 class="display-4 text-center">GoCamp</h1>
            <h3 style="color: whitesmoke; text-align: center;">Welcome <?php if(isset($_SESSION['nama'])){
              echo $_SESSION['nama'];
          } else {
            echo "";
          }?></h3>
            <p>Berlibur dan camping dengan layanan Go Camp akan memudahkan anda</p>
            <div class="d-grid gap-2 col-2 mx-auto">
              <a class="button" href="#rent">Mulai</a>
            </div>
        </div>
    </section>
    <!-- End Jumbotron / Hero Session -->

    <!-- Rent Session -->
    <section class="rent" id="rent">
      <div class="jumbotron jumbotron-fluid" style="background-image: url(asset/foto/rent.png); background-size: cover; background-position: center; width: 100%; overflow: hidden;" >
        <div class="container">
          <div class="head">
            <img class="card-img mt-2" src="asset/foto/logo-big.png" style="width:10%; height:5%" alt="Logo"/>
            <h1 class="display-4 text-center">Sewa Alat Camping</h1>
          </div>
          <p class="lead text-center mb-5" style="color: whitesmoke;">GoCamp menyediakan berbagai macam kebutuhan camping dan destinasi camping </p>
          <div class="d-grid gap-2 col-2 mx-auto">
            <a class="button" href="rent.php">Sewa</a>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,80C384,107,480,181,576,213.3C672,245,768,235,864,197.3C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
    </section>
    <!-- End Rent Session -->

    <!-- Destination Session -->
    <section class="destination" id="destination">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 text-center mt-5">Destinasi Rekomendasi</h1>
          <p class="lead text-center mb-5">Yuk coba kunjungin tempat-tempat rekomendasi kami untuk camp yang lebih berkesan !!</p>
          <div class="row justify-content-center">
              <?php foreach($data as $d):?>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <img src="gambar/<?= $d['gambar'];?>" width="200px" height="200px" class="card-img-top" alt="foto">
                <div class="card-body">
                  <h5 class="card-title text-center" id="title"><?= $d['nama_destinasi']?><hr></h5>
                  <p class="card-title text-center mb-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" id="title"><?= $d['alamat_destinasi'];?></p>
                  <p class="card-text text-justify " style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" id="para"><?= $d['deskripsi_destinasi'];?></p>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <div class="row justify-content-center">
            <div class="col mt-3">
              <div class="d-grid gap-2 col-lg-4 col-sm-6 mx-auto">
                <a class="button" href="destinasi.php">Selengkapnya !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Destination Session -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
