<?php
include_once("koneksi.php");

// Periksa apakah parameter 'id' ada di URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID buku tidak ditemukan.");
}

$id = $_GET['id'];

// Query untuk mengambil data buku berdasarkan ID
$query = "SELECT * FROM tb_buku WHERE id_buku = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah buku ditemukan
if ($result->num_rows == 0) {
    die("Error: Buku dengan ID tersebut tidak ditemukan.");
}

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ubah Buku</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
    </div>

    <h1 class="ml-5">Ubah Koleksi Buku</h1>

    <form method="post" action="prosesubahbuku.php" class="ml-5">
        <!-- Input hidden untuk mengirim ID buku -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id_buku']); ?>">

        <div class="form-group row">
            <label for="id" class="col-sm-1 col-form-label">Id</label>
            <div class="col-sm-3">
                <input type="text" name="id" class="form-control" value="<?php echo htmlspecialchars($data['id_buku']); ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="judul" class="col-sm-1 col-form-label">Kode Buku</label>
            <div class="col-sm-3">
                <input type="text" name="kode" class="form-control" value="<?php echo htmlspecialchars($data['kode_buku']); ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="judul" class="col-sm-1 col-form-label">Judul Buku</label>
            <div class="col-sm-3">
                <input type="text" name="judul" class="form-control" value="<?php echo htmlspecialchars($data['judul_buku']); ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="pengarang" class="col-sm-1 col-form-label">Pengarang</label>
            <div class="col-sm-3">
                <input type="text" name="pengarang" class="form-control" value="<?php echo htmlspecialchars($data['pengarang']); ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun_terbit" class="col-sm-1 col-form-label">Tahun Terbit</label>
            <div class="col-sm-3">
                <input type="number" name="tahun_terbit" class="form-control" value="<?php echo htmlspecialchars($data['tahun_terbit']); ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="kategori" class="col-sm-1 col-form-label">Kategori</label>
            <div class="col-sm-3">
                <input type="text" name="kategori" class="form-control" value="<?php echo htmlspecialchars($data['kategori']); ?>" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <!-- Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
