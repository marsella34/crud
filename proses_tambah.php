<?php
include 'koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

$query = "INSERT INTO tb_siswa (nama, nis, alamat) VALUES ('$nama', '$nis', '$alamat')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data</a>";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}
?>
