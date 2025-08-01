<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita - SMK Negeri 64 Jakarta</title>
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
    <h1>Berita & Informasi</h1>
    <p>Informasi terbaru dan kegiatan sekolah kami</p>
  </div>
</section>

<!-- Berita Section -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Berita Terbaru</h2>
      <p>Ikuti perkembangan dan kegiatan terbaru SMK Negeri 64 Jakarta</p>
    </div>

    <div class="grid grid-2">
      <?php
      $berita = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");
      while ($row = mysqli_fetch_assoc($berita)):
      ?>
        <div class="card fade-in-up news-card">
          <div class="card-body">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                <span style="color: white; font-size: 1rem;">📰</span>
              </div>
              <div>
                <p style="color: #666; font-size: 0.9rem; margin: 0;"><?= date('j F Y', strtotime($row['tanggal'])) ?></p>
              </div>
            </div>
            <h3 style="margin-bottom: 1rem; color: #1a1a1a;"><?= $row['judul'] ?></h3>
            <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;"><?= substr($row['isi'], 0, 200) ?>...</p>
            <a href="berita_detail.php?id=<?= $row['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      <?php endwhile; ?>

      <?php if (mysqli_num_rows($berita) == 0): ?>
        <div class="card fade-in-up" style="grid-column: 1 / -1;">
          <div class="card-body text-center">
            <div style="width: 80px; height: 80px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
              <span style="font-size: 2rem;">📭</span>
            </div>
            <h3 style="color: #1a1a1a; margin-bottom: 1rem;">Belum Ada Berita</h3>
            <p style="color: #666;">Belum ada informasi berita saat ini. Silakan cek kembali nanti.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="card fade-in-up" style="background: linear-gradient(135deg, #ff5f81ff 0%); color: white; text-align: center;">
      <div class="card-body">
        <h2 style="color: white; margin-bottom: 1rem;">Dapatkan Update Terbaru</h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang kegiatan sekolah</p>
        <div style="display: flex; gap: 1rem; max-width: 400px; margin: 0 auto;">
          <input type="email" placeholder="Masukkan email Anda" style="flex: 1; padding: 0.75rem; border: none; border-radius: 8px; font-family: inherit;">
          <button class="btn btn-outline" style="background: white; color: #ff5f81ff; border-color: white;">Berlangganan</button>
        </div>
      </div>
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
