<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../config.php';

// Ambil data berdasarkan ID
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = $id");
$berita = mysqli_fetch_assoc($data);

// Jika form disubmit
if (isset($_POST['update'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  if ($judul == "" || $isi == "" || $tanggal == "") {
    $error = "Form tidak boleh kosong!";
  } else {
    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("UPDATE berita SET judul = ?, isi = ?, tanggal = ? WHERE id = ?");
    $stmt->bind_param("sssi", $judul, $isi, $tanggal, $id);

    if ($stmt->execute()) {
      header("Location: dashboard.php");
      exit();
    } else {
      $error = "Gagal mengedit berita.";
    }

    $stmt->close(); // Tutup prepared statement
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Berita</h2>

  <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

  <form method="post">
    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($berita['judul']) ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Isi</label>
      <textarea name="isi" class="form-control" rows="5" required><?= htmlspecialchars($berita['isi']) ?></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" name="tanggal" class="form-control" value="<?= htmlspecialchars($berita['tanggal']) ?>" required>
    </div>
    <button type="submit" name="update" class="btn btn-warning">Update</button>
    <a href="dashboard.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
