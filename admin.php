<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: index.php");
  exit();
}
require 'function.php';
$b = mysqli_query($con, "SELECT * FROM barang");
$br = mysqli_num_rows($b);
$d = mysqli_query($con, "SELECT * FROM destinasi");
$dr = mysqli_num_rows($d);
$u = mysqli_query($con, "SELECT * FROM user");
$use = mysqli_fetch_row($u);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- css -->
    <link rel="stylesheet" href="asset/css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;600;800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-expand-md bg-light">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">Welcome Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <p class="text mt-3 me-3">Welcome <?= $use[1]?></p>
            </ul>
          </div>
        </div>
      </nav>

      <div class="slide">
        <ul>
          <li>
            <a href="admin.php">Dashboard</a>
          </li>
          <li>
            <a href="barang.php">Barang</a>
          </li>
          <li>
            <a href="read.php">Destinasi</a>
          </li>
          <li>
            <a href="index.php">Website</a>
          </li>
          <li>
            <a href="logout.php">Logout</a>
          </li>
        </ul>
      </div>

      <div class="main-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block bg-white rounded shadow p-3">
                <h2>Hello Admin</h2>
                <br />
                <div class="row justify-content-center p-2">
                  <div class="col-6 border border-dark rounded bg-success p-5 m-2">
                    <h4 class="text text-center" style="color: whitesmoke">Total Barang</h4>
                    <h5 class="text text-center" style="color: whitesmoke"><?= $br;?></h5>
                  </div>
                  <div class="col-6 border border-dark rounded bg-success p-5 m-2">
                    <h4 class="text text-center" style="color: whitesmoke">Artikel Destinasi</h4>
                    <h5 class="text text-center" style="color: whitesmoke"><?= $dr;?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
