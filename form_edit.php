<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">
        <p>Nama:<br>
            <input type="text" name="nama" value="<?= $d['nama']; ?>" required>
        </p>
        <p>NIS:<br>
            <input type="text" name="nis" value="<?= $d['nis']; ?>" required>
        </p>
        <p>Alamat:<br>
            <textarea name="alamat" required><?= $d['alamat']; ?></textarea>
        </p>
        <p><button type="submit">Simpan Perubahan</button></p>
    </form>
</body>
</html>
