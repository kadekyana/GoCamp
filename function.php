<?php

$con = mysqli_connect("localhost", "root", "", "gocamp");


function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $bariss = [];

    while($baris = mysqli_fetch_assoc($result)){
        $bariss[] = $baris;
    }
    return $bariss;
}

function tambah($data){
    global $con;

    $nama = htmlspecialchars($data["nama"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $harga = htmlspecialchars($data["harga"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $bahan = htmlspecialchars($data["bahan"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO barang 
                VALUES
            ('' , '$nama','$jumlah','$harga','$gambar','$kapasitas','$ukuran','$bahan')";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
function tambah_d($data){
    global $con;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $link = htmlspecialchars($data["link"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO destinasi
                VALUES
            ('' , '$nama','$alamat','$link', '$deskripsi' ,'$gambar')";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function upload(){
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpFile = $_FILES["gambar"]["tmp_name"];


    if($error === 4){
        echo "<script> alert('Silahkan Isi Foto Terlebih Dahulu !');
            </script>";
            return false;
    }

    $ekstensi = ["jpg", "png", "jpeg"];
    $valid = explode(".", $namaFile);
    $valid = strtolower(end($valid));

    if (!in_array($valid, $ekstensi)){
        echo "<script> alert('Upload ulang gambar sesuai ekstensi !');
            </script>";
            return false;
    }

    if($ukuranFile > 100000000){
        echo "<script> alert('Ukuran Minimal 10Mb !');
            </script>";
            return false;
    }

    $baru = uniqid();
    $baru .= ".";
    $baru .= $ekstensi;

    move_uploaded_file($tmpFile, "gambar/" . $baru);
    return $baru;
}
function hapus($id){
    global $con;
    mysqli_query($con, "DELETE FROM barang WHERE id_barang = $id");
    return mysqli_affected_rows($con);
}
function hapus_d($id){
    global $con;
    mysqli_query($con, "DELETE FROM destinasi WHERE id_destinasi = $id");
    return mysqli_affected_rows($con);
}

function edit($data){
    global $con;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $harga = htmlspecialchars($data["harga"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $bahan = htmlspecialchars($data["bahan"]);

    $gambarlama = $data["gambarlama"];

    if($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }

    $query = "UPDATE barang SET 
                nama_barang = '$nama',
                jumlah_barang = '$jumlah',
                harga_barang = '$harga',
                gambar_barang = '$gambar',
                kapasitas_barang = '$kapasitas',
                ukuran_barang = '$ukuran',
                bahan_barang = '$bahan'
            WHERE id_barang = $id;
            ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function edit_d($data){
    global $con;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $link = htmlspecialchars($data["link"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $gambarlama = $data["gambarlama"];

    if($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }

    $query = "UPDATE destinasi SET 
                nama_destinasi = '$nama',
                alamat_destinasi = '$alamat',
                link_destinasi = '$link',
                deskripsi_destinasi = '$deskripsi',
                gambar = '$gambar'
            WHERE id_destinasi = $id;
            ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function registrasi($data){
    global $con;

    $nama = htmlspecialchars($data["nama"]);
    $email = $data["email"];
    $password = mysqli_real_escape_string($con, $data["password1"]);
    $password2 = mysqli_real_escape_string($con, $data["password2"]);

    if($password != $password2){
        echo    "<script>
                alert('Password Tidak Sama, Mohon Ulangi !');
                </script>";
        return false;
    }
    //cek duplikat email
    $cek = mysqli_query($con, "SELECT nama FROM user WHERE nama = '$nama'");

    if(mysqli_fetch_assoc($cek)){
        echo "<script>
                alert('Email Sudah Digunakan !')
                </script>";
        return false;
    }
    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //data masuk ke database
    mysqli_query($con, "INSERT INTO user VALUES(
        '',
        '$nama',
        '$email',
        '$password',
        '2'
    )");

    return mysqli_affected_rows($con);
}
?>