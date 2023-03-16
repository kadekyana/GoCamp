<?php
require "function.php";

$id = $_GET["id_d"];

    if(hapus_d($id) > 0){
        echo "<script> alert('Data Berhasil Di Hapus');
        document.location.href = 'read.php';
            </script>";
    }else{
        echo "<script> alert('Data Gagal Di Hapus');
        document.location.href = 'read.php';
            </script>";
        }
?>