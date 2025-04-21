<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <a href="index.php">← Kembali</a>
    <br><br>
    <form method="POST" action="proses_tambah.php">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIS:</label><br>
        <input type="text" name="nis" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
