<?php
session_start();
include '../config.php';

$pesanError = "";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];// hash md5 seperti yang di database

  $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
  if (mysqli_num_rows($query) == 1) {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php");
    exit;
  } else {
    $pesanError = "Login gagal! Username atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 400px;">
  <h3 class="text-center mb-4">Login Admin</h3>

  <?php if ($pesanError): ?>
    <div class="alert alert-danger"><?= $pesanError ?></div>
  <?php endif; ?>

  <form method="post">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
  </form>
</div>
</body>
</html>
