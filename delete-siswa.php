<?php
include 'koneksi.php';

$id  = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='$id'");

header('location: Siswa.php');
?>