<?php

$koneksi = mysqli_connect("localhost","root","mysql","data");
echo "Koneksi Berhasil";

if(mysqli_connect_error()){
    echo "koneksi database gagal: " . mysqli_connect_error();

}

?>