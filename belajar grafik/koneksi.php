<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mahasiswa"; // Pastikan database bernama 'mahasiswa' ada di phpMyAdmin

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
