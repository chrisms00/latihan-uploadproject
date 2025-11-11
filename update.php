<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP KELAS XI RPL 2</title>
</head>
<body>

    <h2>CRUD DATA SISWA SMKN 11 MALANG</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br><br>
    <h3>EDIT DATA SISWA</h3>

    <?php
    include 'koneksi.php';
    $id_siswa = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from siswa where id_siswa ='$id_siswa'");

    while($d = mysqli_fetch_array($data)){
    ?>

    <form method="post" action="ubah.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>
                    <input type="number" name="nisn" value="<?php echo $d['nisn']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN">
                    <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                </td>
            </tr>
        </table>
    </form>

    <?php
    } 
    ?>

</body>
</html>