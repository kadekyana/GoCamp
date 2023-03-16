<?php
require 'function.php';
$data = query("SELECT * FROM destinasi");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoCamp || Page Destinasi</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body style="background-color: #273036;">
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
                  <a class="nav-link" aria-current="page" href="index.php" id="a">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rent.php" id="a">Sewa</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#destinasi" id="a">Dest</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact" id="a">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->

        <!-- Destinasi Session -->
        <section class="destinasi" id="destinasi">
          <div class="jumbotron" id="jumbotron"  style="background-image: url(asset/foto/destinasi.png); background-size: cover; background-position: center; width: 100%; height: 100vh; overflow: hidden;">
              <h1 class="display-4 text-center">Destinasi</h1>
              <p>Yuk Cari Info Tempat Camp Sesuai Selesa Mu !</p>
              <div class="d-grid gap-2 col-lg-2 col-sm-3 mx-auto">
                <a class="button" href="#carddestinasi">YUK !!!</a>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,80C384,107,480,181,576,213.3C672,245,768,235,864,197.3C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          </div>
      </section>

      <section class="carddestinasi" id="carddestinasi">
        <!-- Cards Destinasi -->
        <div class="container-fluid">
          <?php foreach($data as $d):?>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-4 col-sm-6 my-auto">
              <div class="card rounded" style="width: 100%; background-color:#273036;">
                <img src="gambar/<?= $d['gambar'];?>" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col-lg-7 col-sm-6">
              <h1 class="text text-center" style="color:whitesmoke;"><?= $d['nama_destinasi'];?><hr></h1>
              <p class="text text-justify" style="color:whitesmoke ;"><?= $d['alamat_destinasi']?></p>
              <p class="text text-justify" style="color:whitesmoke ;"><?= $d['deskripsi_destinasi']?></p>
              <p class="text text-justify" style="color:whitesmoke ;"><a href="<?= $d['link_destinasi'];?>">Link Lokasi / No Yang Dapat Dihubungi !</a></p>
            </div>
          </div>
          <?php endforeach;?>
        <!-- End Cards Destinasi -->
      </section>

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
