<?php
include 'koneksi.php';

$nis = $_POST["nis"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jurusan = $_POST["jurusan"];
$password = $_POST["password"];

$query = "INSERT INTO siswa (nis, nama, kelas, jurusan, password) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "sssss", $nis, $nama, $kelas, $jurusan, $password);

if (mysqli_stmt_execute($stmt)) {
    header("Location: Siswa.php?pesan=sukses");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
