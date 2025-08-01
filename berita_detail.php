<?php
include 'config.php';

// Ambil ID dari URL
if (!isset($_GET['id'])) {
  die("ID berita tidak ditemukan.");
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = $id");
$berita = mysqli_fetch_assoc($query);

if (!$berita) {
  die("Berita tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $berita['judul'] ?> - SMK Negeri 64 Jakarta</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero" style="padding: 6rem 0 4rem;">
  <div class="hero-content">
    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
      <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
        <span style="color: white; font-size: 1.2rem;">📰</span>
      </div>
      <p style="color: rgba(255,255,255,0.9); margin: 0;"><?= date('j F Y', strtotime($berita['tanggal'])) ?></p>
    </div>
    <h1><?= $berita['judul'] ?></h1>
    <p>Berita terbaru dari SMK Negeri 64 Jakarta</p>
  </div>
</section>

<!-- Article Section -->
<section class="section">
  <div class="container">
    <div class="card fade-in-up" style="max-width: 800px; margin: 0 auto;">
      <div class="card-body">
        <div style="display: flex; align-items: center; margin-bottom: 2rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f0f0f0;">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
            <span style="color: white; font-size: 1.5rem;">📰</span>
          </div>
          <div>
            <h3 style="margin-bottom: 0.5rem; color: #1a1a1a;"><?= $berita['judul'] ?></h3>
            <p style="color: #666; margin: 0;">Dipublikasikan pada <?= date('j F Y', strtotime($berita['tanggal'])) ?></p>
          </div>
        </div>
        
        <div style="line-height: 1.8; color: #333; font-size: 1.1rem;">
          <?= nl2br($berita['isi']) ?>
        </div>
        
        <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #f0f0f0;">
          <a href="berita.php" class="btn btn-outline">
            <span style="margin-right: 0.5rem;">←</span>
            Kembali ke Berita
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related News Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Berita Terkait</h2>
      <p>Berita lainnya yang mungkin menarik untuk Anda</p>
    </div>
    
    <div class="grid grid-3">
      <?php
      $related_news = mysqli_query($koneksi, "SELECT * FROM berita WHERE id != $id ORDER BY tanggal DESC LIMIT 3");
      while ($related = mysqli_fetch_assoc($related_news)):
      ?>
        <div class="card fade-in-up">
          <div class="card-body">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                <span style="color: white; font-size: 1rem;">📰</span>
              </div>
              <div>
                <p style="color: #666; font-size: 0.9rem; margin: 0;"><?= date('j F Y', strtotime($related['tanggal'])) ?></p>
              </div>
            </div>
            <h4 style="margin-bottom: 1rem; color: #1a1a1a; font-size: 1.1rem;"><?= $related['judul'] ?></h4>
            <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;"><?= substr($related['isi'], 0, 150) ?>...</p>
            <a href="berita_detail.php?id=<?= $related['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      <?php endwhile; ?>
      
      <?php if (mysqli_num_rows($related_news) == 0): ?>
        <div class="card fade-in-up" style="grid-column: 1 / -1;">
          <div class="card-body text-center">
            <div style="width: 80px; height: 80px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
              <span style="font-size: 2rem;">📭</span>
            </div>
            <h3 style="color: #1a1a1a; margin-bottom: 1rem;">Tidak Ada Berita Lain</h3>
            <p style="color: #666;">Belum ada berita lainnya saat ini.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div>
        <h3>SMK Negeri 64 Jakarta</h3>
        <p>Mewujudkan Generasi Digital yang Kreatif dan Profesional</p>
      </div>
      <div>
        <h3>Kontak</h3>
        <p>Email: info@smkn64jkt.sch.id</p>
        <p>Telepon: (021) 809-1234</p>
      </div>
      <div>
        <h3>Alamat</h3>
        <p>Jl. SMP 126 RT 10 RW 03, Batu Ampar, Kramat Jati, Jakarta Timur</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 SMK Negeri 64 Jakarta. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="assets/js/animations.js"></script>

</body>
</html>
