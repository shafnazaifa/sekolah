<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website resmi SMK Negeri 64 Jakarta - Mewujudkan Generasi Digital yang Kreatif dan Profesional">
  <meta name="keywords" content="SMK, Jakarta, Sekolah, Teknologi, RPL, DKV">
  <meta name="author" content="SMK Negeri 64 Jakarta">
  <title>SMK Negeri 64 Jakarta - Beranda</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <img src="assets/images/logo.png" alt="Logo SMK Negeri 64 Jakarta" class="logo">
    <h1>SMK Negeri 64 Jakarta</h1>
    <p>Mewujudkan Generasi Digital yang Kreatif dan Profesional</p>
    <a href="profil.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- Profile Section -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Profil Sekolah</h2>
      <p>Mengenal lebih dekat SMK Negeri 64 Jakarta yang telah berkomitmen dalam menghasilkan lulusan berkualitas</p>
    </div>
    
    <div class="card fade-in-up">
      <div class="card-body">
        <table class="profile-table">
          <tr>
            <th>Nama Sekolah</th>
            <td>SMK Negeri 64 Jakarta</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>Jalan Jaani Nasir No.8, RT.8/RW.11, Cawang, Kramat Jati, Jakarta Timur, Jakarta 13630</td>
          </tr>
          <tr>
            <th>Program Keahlian</th>
            <td>Rekayasa Perangkat Lunak, Desain Komunikasi Visual</td>
          </tr>
          <tr>
            <th>Akreditasi</th>
            <td>A</td>
          </tr>
          <tr>
            <th>Visi</th>
            <td>Menjadi SMK unggulan yang menghasilkan lulusan berkualitas, berakhlak mulia, dan siap kerja</td>
          </tr>
          <tr>
            <th>Misi</th>
            <td>Menyelenggarakan pendidikan kejuruan yang berkualitas dengan mengembangkan potensi peserta didik secara optimal</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Keunggulan Kami</h2>
      <p>Beberapa hal yang membuat SMK Negeri 64 Jakarta menjadi pilihan terbaik</p>
    </div>
    
    <div class="grid grid-3">
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">🎓</span>
          </div>
          <h3>Akreditasi A</h3>
          <p>Program keahlian kami telah terakreditasi A, menjamin kualitas pendidikan yang tinggi</p>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">💼</span>
          </div>
          <h3>Siap Kerja</h3>
          <p>Lulusan kami telah dibekali dengan kompetensi yang sesuai dengan kebutuhan industri</p>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">🔧</span>
          </div>
          <h3>Fasilitas Lengkap</h3>
          <p>Dilengkapi dengan laboratorium dan peralatan modern untuk mendukung pembelajaran</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section">
  <div class="container">
    <div class="card" style="background: linear-gradient(135deg, #ff5f81ff 0%); color: white; text-align: center;">
      <div class="card-body">
        <h2 style="color: white;">Siap Bergabung dengan Kami?</h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">Daftarkan diri Anda sekarang dan wujudkan masa depan yang cerah di dunia digital</p>
        <a href="kontak.php" class="btn btn-outline" style="background: white; color: #ff5f81ff ; border-color: white;">Hubungi Kami</a>
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
        <p>Email: info@smkn64jakarta.sch.id</p>
        <p>Telepon: (021) 809-1234</p>
      </div>
      <div>
        <h3>Alamat</h3>
        <p>Jalan Jaani Nasir No.8, RT.8/RW.11, Cawang, Kramat Jati, Jakarta Timur, Jakarta 13630</p>
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