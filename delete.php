<?php

include 'koneksi.php';

$id_siswa = $_GET['id'];

mysqli_query($koneksi, "delete from siswa where id_siswa = '$id_siswa'");


header("location:index.php");

?>