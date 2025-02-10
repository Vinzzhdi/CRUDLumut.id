<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Siswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">
    <h3>Update Data Siswa</h3>
    <form action="update-siswa-aksi.php" method="POST">
        <input type="text" name="nis" placeholder="NIS" required>
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        
        <select name="kelas">
            <option value="">-- Pilih Kelas --</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>

        <select name="jurusan">
            <option value="">-- Pilih Jurusan --</option>
            <option value="TKJ">TKJ</option>
            <option value="RPL">RPL</option>
            <option value="MP">MP</option>
            <option value="AKL">AKL</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
            <option value="BR">BR</option>
            <option value="LPS">LPS</option>
        </select>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
