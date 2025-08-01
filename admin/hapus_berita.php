<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

include '../config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Hapus dari database
  $query = mysqli_query($koneksi, "DELETE FROM berita WHERE id = $id");

  if ($query) {
    header("Location: dashboard.php");
  } else {
    echo "Gagal menghapus data!";
  }
} else {
  echo "ID tidak ditemukan.";
}
?>
