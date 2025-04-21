<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Kalau belum login, alihkan ke login.php
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Siswa SMK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Siswa SMK N 1 Wonosobo</h2>
    <p>Halo, <strong><?= $_SESSION['username']; ?></strong>!</p>

    <a href="form_tambah.php">+ TAMBAH SISWA</a> | 
    <a href="logout.php" onclick="return confirm('Yakin ingin keluar?')">Logout</a>

    <table>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['nis']; ?></td>
            <td><?= $d['alamat']; ?></td>
            <td>
                <a href="form_edit.php?id=<?= $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
