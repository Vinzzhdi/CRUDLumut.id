<?php
include 'koneksi.php';

$nis = $_POST["nis"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jurusan = $_POST["jurusan"];

mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' where nis='$nis'");

header("location: Siswa.php");
?>