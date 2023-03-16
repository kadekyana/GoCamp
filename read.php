<?php

require "function.php";
$data = query("SELECT * FROM destinasi");   
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
              <li class="nav-item">
                <a class="nav-link pe-3" aria-current="page" href="#">Welcome Dwi</a>
              </li>
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
            <a href="logout.php">Logout</a>
          </li>
        </ul>
      </div>

      <div class="main-page" style=" height: 100%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block bg-white rounded shadow p-3">
              <button class="btn btn-primary mt-3 mb-3"><a style="text-decoration: none; color: whitesmoke; " href="tambah_d.php">Tambah Data</a></button>
                <h2>Data Destinasi</h2>
                <br />
                <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Link/No Hub</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Gambar</th>
                          <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                      <?php $i = 1;?>
                      <?php foreach($data as $baris) :?>
                  <tbody>
                      <tr>
                      <td><?= $i;?></td>
                      <td><?= $baris["nama_destinasi"];?></td>
                      <td><?= $baris["alamat_destinasi"];?></td>
                      <td> <a href="<?= $baris["link_destinasi"];?>" > Link Klik Disini !</td>
                      <td><?= $baris["deskripsi_destinasi"];?></td>
                      <td><img src="gambar/<?= $baris["gambar"]; ?>" alt="" width="50px" height="50px"></td>
                      <td><button class="btn btn-danger" type="submit" name="hapus"><a style="text-decoration: none; color: whitesmoke; " href="hapus_d.php?id_d=<?= $baris["id_destinasi"];?>">Hapus</a></button> || 
                          <button class="btn btn-primary" type="submit" name="edit"><a style="text-decoration: none; color: whitesmoke; " href="edit_d.php?id_d=<?= $baris["id_destinasi"];?>">Update</a></button></td>
                      </tr>
                  </tbody>
                  <?php $i++;?>
                  <?php endforeach;?>
                  </table>
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
