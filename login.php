<?php 
session_start();

require 'function.php';

  if(isset($_POST["login"])){

  $email = $_POST["email"];
  $password = $_POST["password"];

  $hasil = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($hasil) === 1){

     $baris = mysqli_fetch_assoc($hasil);

      if(password_verify($password, $baris['password'])){

        if($baris['jenis_id'] == "admin"){
          $_SESSION['email'] = $email;
          $_SESSION['nama'] = $baris["nama"];
        $_SESSION['admin'] = $baris["jenis_id"];
        header("Location: admin.php");
        
        }elseif($baris['jenis_id'] == "user"){
        $_SESSION['nama'] = $baris["nama"];
        $_SESSION['email'] = $email;
        $_SESSION['user'] = $baris["jenis_id"];
        header("Location: index.php");

        }else{

        echo "<script>alert('Kamu Bukan User Disini!')</script>";
        
        }
    }else{
      echo "<script> alert('Password Salah! ') </script>";
    }

  }else{
    echo "<script>alert('Email Belum terdaftar, Silahkan Registrasi!')</script>";
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
            <form action="" method="POST">
              <h1 style="font-family: Arial, Helvetica, sans-serif; font-weight: bold">
                <img src="asset/foto/logo.png" alt="" />
                GoCamp
              </h1>
              <h2 style="margin-bottom: 10%">Silahkan Login Akun</h2>
              <div class="row justify-content-center py">
                <div class="col-lg-6">
                  <input type="email" class="form-control my-3" name="email" placeholder="Masukkan Email" />
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <input type="Password" class="form-control my-3" name="password" placeholder="Masukkan Password" />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 mx-auto">
                  <button type="submit" name="login" class="btn btn-primary mb-3">Login</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 mx-auto">
                  <p>
                    Belum Punya Akun?
                    <a href="registrasi.php">Registrasi Disini !</a>
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
