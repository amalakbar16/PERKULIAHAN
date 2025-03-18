
<?php
include_once("koneksi.php");

// Periksa apakah parameter id ada
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID buku tidak ditemukan.");
}

$id = $_GET['id'];

// Gunakan Prepared Statement untuk keamanan
$query = "DELETE FROM tb_buku WHERE id_buku = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$hasil = $stmt->execute();

if ($hasil) {
    header("Location: index.php");
} else {
    echo "Hapus Data Gagal";
}
?>
