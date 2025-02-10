<?php
session_start();
include "koneksi.php"; // Pastikan nama file benar (huruf kecil)

if (isset($_POST['nis']) && isset($_POST['password'])) {
    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']); // Hindari SQL Injection

    // Periksa apakah koneksi ke database berhasil
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk mendapatkan data siswa berdasarkan NIS
    $query = "SELECT * FROM siswa WHERE nis = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $nis);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);

        if ($data) {
            // Gunakan perbandingan biasa karena password belum di-hash
            if ($password == $data['password']) {
                // Simpan data ke session
                $_SESSION['nis'] = $data['nis'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['kelas'] = $data['kelas'];
                $_SESSION['jurusan'] = $data['jurusan'];

                header("Location: siswa.php");
                exit();
            } else {
                $_SESSION['error'] = "NIS atau Password salah.";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "NIS tidak ditemukan.";
            header("Location: login.php");
            exit();
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Kesalahan dalam query: " . mysqli_error($koneksi));
    }
} else {
    $_SESSION['error'] = "Harap masukkan NIS dan Password.";
    header("Location: login.php");
    exit();
}
?>
