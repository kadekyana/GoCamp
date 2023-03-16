<?php
require('function.php');

if(isset($_POST["kirim"])){
  if(registrasi($_POST) > 0){
    echo    "<script>
                alert('Berhasil Melakukan Registrasi !');
                document.location.href = 'login.php';
                </script>";
  }else{
    echo mysqli_error($con);
  }
}

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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;600;800&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body style="background-color: darkcyan">
    <section class="form-login my-4 mx-5">
      <div class="container">
        <div class="row g-0" id="row-login">
          <div class="col-lg-5">
            <img src="asset/foto/img-login.png" class="img-fluid" id="img-login" alt="" />
          </div>
          <div class="col-lg-7 px-5 py-5">
            <form action="" method="post">
              <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold">
                <img src="asset/foto/logo.png" alt="" />
                GoCamp
              </h1>
              <h2 style="margin-bottom: 10%">Silahkan Registrasi Akun</h2>
              <div class="row justify-content-center py">
                <div class="col-lg">
                  <input type="text" class="form-control my-3" name="nama" placeholder="Masukkan Nama" required/>
                </div>
              </div>
              <div class="row justify-content-center py">
                <div class="col-lg">
                  <input type="email" class="form-control my-3" name="email" placeholder="Masukkan Email" required/>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-lg-6">
                  <input type="Password" class="form-control my-3" name="password1" placeholder="Masukkan Password" required/>
                </div>
                <div class="col-lg-6">
                  <input type="Password" class="form-control my-3" name="password2" placeholder="Masukkan Ulang Password" required/>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 mx-auto">
                  <button type="submit" name="kirim" class="btn btn-primary mb-3">Registrasi</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 mx-auto">
                  <p>
                    Sudah Punya Akun?
                    <a href="login.php">Login Disini !</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
