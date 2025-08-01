<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../config.php';

if (isset($_POST['simpan'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  if ($judul == "" || $isi == "" || $tanggal == "") {
    echo "<div class='alert alert-danger'>Semua form harus diisi!</div>";
  } else {
    $query = mysqli_query($koneksi, "INSERT INTO berita (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')");

    if ($query) {
      echo "<div class='alert alert-success'>Berhasil ditambahkan!</div>";
      // Bisa redirect ke dashboard kalau mau
      // header("Location: dashboard.php");
    } else {
      echo "<div class='alert alert-danger'>Gagal menyimpan: " . mysqli_error($koneksi) . "</div>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <a href="dashboard.php" class="btn btn-danger">Back</a>
  <h2>Tambah Berita</h2>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Isi</label>
      <textarea name="isi" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required>
    </div>
    <button type="submit" name="simpan" class="btn btn-primary">Simpan
