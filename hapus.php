<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tb_siswa WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan');window.location='index.php';</script>";
}
?>
