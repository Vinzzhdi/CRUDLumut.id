<?php
include 'koneksi.php';


$id = $_GET['id'];

$DATA = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$id'");
$isi = mysqli_fetch_assoc($DATA);

if (!$isi) {
    die("Data tidak ditemukan!");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style2.css">
    <div class="container">
    <h3>Edit Data Siswa</h3>
</head>
<form method="post" action="edit-siswa-aksi.php">
    <table>
        <tr>
            <td>Nama Lengkap:</td>
            <td>
                <input type="hidden" name="nis" value="<?php echo $isi['nis']; ?>">
                <input type="text" name="nama" value="<?php echo $isi['nama']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Kelas:</td>
            <td>
                <select name="kelas" required>
                    <option value="X" <?php if ($isi['kelas'] == 'X') echo 'selected'; ?>>X</option>
                    <option value="XI" <?php if ($isi['kelas'] == 'XI') echo 'selected'; ?>>XI</option>
                    <option value="XII" <?php if ($isi['kelas'] == 'XII') echo 'selected'; ?>>XII</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan:</td>
            <td>
            <select name="jurusan" required>
                    <option value="RPL" <?php if ($isi['jurusan'] == 'rpl') echo 'selected'; ?>>RPL</option>
                    <option value="DKV" <?php if ($isi['jurusan'] == 'dkV') echo 'selected'; ?>>DKV</option>
                    <option value="TKJ" <?php if ($isi['jurusan'] == 'tkj') echo 'selected'; ?>>TKJ</option>
                    <option value="AKL" <?php if ($isi['jurusan'] == 'akl') echo 'selected'; ?>>AKL</option>
                    <option value="MP" <?php if ($isi['jurusan'] == 'mp') echo 'selected'; ?>>MP</option>
                    <option value="BR" <?php if ($isi['jurusan'] == 'br') echo 'selected'; ?>>BR</option>
                    <option value="BD" <?php if ($isi['jurusan'] == 'bd') echo 'selected'; ?>>BD</option>
                    <option value="LPS" <?php if ($isi['jurusan'] == 'lps') echo 'selected'; ?>>LPS</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>
