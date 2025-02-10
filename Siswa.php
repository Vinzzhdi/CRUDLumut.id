<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['nis'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">
    <h3>Data Siswa</h3>
    <a href="update.php" class="btn">Tambah Data Siswa</a>
    <a href="login.php" class="btn btn-danger">Logout</a>

    <table>
        <tr>
            <th>Id</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        $DATA = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($tampil = mysqli_fetch_array($DATA)) {
        ?>
            <tr>
                <td><?= $tampil['id']; ?></td>
                <td><?= $tampil['nis']; ?></td>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['kelas']; ?></td>
                <td><?= $tampil['jurusan']; ?></td>
                <td>
                    <a href="delete-siswa.php?id=<?= $tampil['nis']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="edit-siswa.php?id=<?= $tampil['nis']; ?>" class="btn">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
