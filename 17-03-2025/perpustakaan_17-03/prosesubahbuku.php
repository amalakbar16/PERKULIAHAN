<?php
include_once("koneksi.php");

// Validasi ID sebelum digunakan
if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Error: ID buku tidak ditemukan!");
}

$id = mysqli_real_escape_string($conn, $_POST['id']);
$kode = mysqli_real_escape_string($conn, $_POST['kode']);
$judul = mysqli_real_escape_string($conn, $_POST['judul']);
$pengarang = mysqli_real_escape_string($conn, $_POST['pengarang']);
$tahun = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);

$query = "UPDATE tb_buku SET 
    kode_buku='$kode',
    judul_buku='$judul', 
    pengarang='$pengarang', 
    tahun_terbit='$tahun', 
    kategori='$kategori' 
    WHERE id_buku='$id'";  // Tambahkan tanda kutip untuk string

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('location:index.php');
} else {
    echo "Update data gagal: " . mysqli_error($conn); // Debug error
}
?>
