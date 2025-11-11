<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$nisn   = $_POST['nisn'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO siswa (nama, nisn, alamat) VALUES ('$nama','$nisn','$alamat')");

header("Location: index.php");
?>