<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami - SMK Negeri 64 Jakarta</title>
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
    <h1>Hubungi Kami</h1>
    <p>Kami siap membantu dan menjawab pertanyaan Anda</p>
  </div>
</section>

<!-- Contact Section -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Informasi Kontak</h2>
      <p>Silakan hubungi kami melalui berbagai saluran yang tersedia</p>
    </div>
    
    <div class="grid grid-2">
      <!-- Contact Info -->
      <div class="card fade-in-up">
        <div class="card-body">
          <h3 style="color: #ff5f81ff; margin-bottom: 2rem;">Informasi Kontak</h3>
          
          <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
              <span style="color: white; font-size: 1.2rem;">📍</span>
            </div>
            <div>
              <h4 style="margin-bottom: 0.5rem; color: #1a1a1a;">Alamat</h4>
              <p style="color: #666; margin: 0;">Jl. SMP 126 RT 10 RW 03, Batu Ampar, Kramat Jati, Jakarta Timur</p>
            </div>
          </div>
          
          <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
              <span style="color: white; font-size: 1.2rem;">📧</span>
            </div>
            <div>
              <h4 style="margin-bottom: 0.5rem; color: #1a1a1a;">Email</h4>
              <p style="color: #666; margin: 0;">info@smkn64jkt.sch.id</p>
            </div>
          </div>
          
          <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
              <span style="color: white; font-size: 1.2rem;">📞</span>
            </div>
            <div>
              <h4 style="margin-bottom: 0.5rem; color: #1a1a1a;">Telepon</h4>
              <p style="color: #666; margin: 0;">(021) 809-1234</p>
            </div>
          </div>
          
          <div style="display: flex; align-items: center;">
            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
              <span style="color: white; font-size: 1.2rem;">🕒</span>
            </div>
            <div>
              <h4 style="margin-bottom: 0.5rem; color: #1a1a1a;">Jam Operasional</h4>
              <p style="color: #666; margin: 0;">Senin - Jumat: 07:00 - 15:00</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="card fade-in-up">
        <div class="card-body">
          <h3 style="color: #ff5f81ff; margin-bottom: 2rem;">Kirim Pesan</h3>
          
          <form method="post" action="" class="contact-form">
            <div style="margin-bottom: 1.5rem;">
              <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #1a1a1a;">Nama Lengkap</label>
              <input type="text" name="nama" required style="width: 100%; padding: 0.75rem; border: 2px solid #f0f0f0; border-radius: 8px; font-family: inherit; transition: border-color 0.3s ease;">
            </div>
            
            <div style="margin-bottom: 1.5rem;">
              <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #1a1a1a;">Email</label>
              <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid #f0f0f0; border-radius: 8px; font-family: inherit; transition: border-color 0.3s ease;">
            </div>
            
            <div style="margin-bottom: 1.5rem;">
              <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #1a1a1a;">Subjek</label>
              <input type="text" name="subjek" required style="width: 100%; padding: 0.75rem; border: 2px solid #f0f0f0; border-radius: 8px; font-family: inherit; transition: border-color 0.3s ease;">
            </div>
            
            <div style="margin-bottom: 2rem;">
              <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #1a1a1a;">Pesan</label>
              <textarea name="pesan" rows="5" required style="width: 100%; padding: 0.75rem; border: 2px solid #f0f0f0; border-radius: 8px; font-family: inherit; resize: vertical; transition: border-color 0.3s ease;"></textarea>
            </div>
            
            <button type="submit" name="kirim" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
          </form>

          <?php
          if (isset($_POST['kirim'])) {
            echo '<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-top: 1.5rem; border: 1px solid #c3e6cb;">
                    <strong>Berhasil!</strong> Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.
                  </div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Lokasi Kami</h2>
      <p>Kunjungi sekolah kami di lokasi strategis</p>
    </div>
    
    <div class="card fade-in-up">
      <div class="card-body" style="padding: 0;">
        <div style="background: #f0f0f0; height: 400px; display: flex; align-items: center; justify-content: center; border-radius: 16px;">
          <div style="text-align: center; color: #666;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">🗺️</div>
            <h3>Peta Lokasi</h3>
            <p>Jl. SMP 126 RT 10 RW 03, Batu Ampar, Kramat Jati, Jakarta Timur</p>
            <a href="https://maps.google.com" target="_blank" class="btn btn-outline" style="margin-top: 1rem;">Buka di Google Maps</a>
          </div>
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
