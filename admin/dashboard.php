<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include '../config.php';

$berita = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Dashboard Admin</h2>
  <p>Login sebagai: <strong><?= $_SESSION['admin'] ?></strong></p>

  <a href="tambah_berita.php" class="btn btn-primary mb-3">+ Tambah Berita</a>

  <?php if (mysqli_num_rows($berita) > 0): ?>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($berita)): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td>
              <a href="edit_berita.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="hapus_berita.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <div class="alert alert-info">Belum ada data berita.</div>
  <?php endif; ?>
</div>
</body>
</html>
