<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">+ TAMBAH SISWA</a>
<br/>
<br/>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>Alamat</th>
        <th>OPSI</th>
    </tr>
<tr>
    <?php
    Include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from siswa");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>  
            <td><?php echo $d['nisn']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['id_siswa']; ?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d['id_siswa']; ?>">DELETE</a>
            </td>
        </tr>
        <?php
    }
?>
</table>
</body>
</html>

