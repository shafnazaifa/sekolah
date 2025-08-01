<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Sekolah - SMK Negeri 64 Jakarta</title>
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
    <h1>Profil Sekolah</h1>
    <p>Mengenal lebih dalam tentang SMK Negeri 64 Jakarta</p>
  </div>
</section>

<!-- Informasi Umum Section -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Informasi Umum</h2>
      <p>Data lengkap dan identitas sekolah kami</p>
    </div>
    
    <div class="grid grid-2">
      <div class="card fade-in-up">
        <div class="card-body">
          <h3 style="color: #ff5f81ff; margin-bottom: 1.5rem;">Data Sekolah</h3>
          <table class="profile-table">
            <tr>
              <th>NPSN</th>
              <td>69992315</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>Jl. SMP 126 RT 10 RW 03, Batu Ampar, Kramat Jati, Jakarta Timur</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>info@smkn64jkt.sch.id</td>
            </tr>
            <tr>
              <th>Kepala Sekolah</th>
              <td>Dewi Puspitasari, S.ST.Par, M.Par</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body">
          <h3 style="color: #ff5f81ff; margin-bottom: 1.5rem;">Tentang Sekolah</h3>
          <p>SMK Negeri 64 Jakarta adalah sekolah berbasis teknologi informasi dengan dua jurusan unggulan: <strong>RPL</strong> dan <strong>DKV</strong>. Berdiri sejak 2019, sekolah ini menerapkan kurikulum berbasis kompetensi dan siap kerja.</p>
          <p>Kami berkomitmen untuk menghasilkan lulusan yang berkualitas, berakhlak mulia, dan siap menghadapi tantangan dunia kerja di era digital.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Visi Misi Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Visi & Misi</h2>
      <p>Panduan dan arah pengembangan sekolah kami</p>
    </div>
    
    <div class="grid grid-2">
      <div class="card fade-in-up">
        <div class="card-body">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">🎯</span>
          </div>
          <h3>Visi</h3>
          <p>Memiliki tamatan yang berbudi pekerti luhur, berkarakter, mandiri, berprestasi, dan berjiwa wirausaha.</p>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">📋</span>
          </div>
          <h3>Misi</h3>
          <ol style="padding-left: 1.5rem; color: #666;">
            <li>Menanamkan budaya 5S (Senyum, Sapa, Salam, Sopan, Santun)</li>
            <li>Membangun sikap profesional</li>
            <li>Meningkatkan potensi siswa</li>
            <li>Menghasilkan lulusan berprestasi</li>
            <li>Menumbuhkan jiwa kewirausahaan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fasilitas Section -->
<section class="section">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Fasilitas & Mitra Industri</h2>
      <p>Dukungan lengkap untuk pembelajaran dan pengembangan karir</p>
    </div>
    
    <div class="grid grid-3">
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">💻</span>
          </div>
          <h3>Laboratorium Komputer</h3>
          <p>Laboratorium komputer lengkap dengan perangkat modern untuk praktik programming dan desain</p>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">🔧</span>
          </div>
          <h3>Bengkel Praktik</h3>
          <p>Bengkel praktik kejuruan untuk otomotif, listrik, dan teknologi informasi</p>
        </div>
      </div>
      
      <div class="card fade-in-up">
        <div class="card-body text-center">
          <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ff5f81ff 0%); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
            <span style="color: white; font-size: 1.5rem;">📚</span>
          </div>
          <h3>Perpustakaan</h3>
          <p>Perpustakaan referensi dengan koleksi buku teknologi dan literatur terkini</p>
        </div>
      </div>
    </div>
    
    <div class="card fade-in-up" style="margin-top: 3rem;">
      <div class="card-body">
        <h3 style="color: #ff5f81ff; margin-bottom: 1.5rem;">Mitra Industri</h3>
        <p>Kami menjalin kerjasama dengan berbagai perusahaan terkemuka untuk memberikan pengalaman kerja langsung kepada siswa:</p>
        <div style="display: flex; gap: 2rem; flex-wrap: wrap; margin-top: 1.5rem;">
          <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; flex: 1; min-width: 200px;">
            <strong>PT Astra Honda Motor</strong>
          </div>
          <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; flex: 1; min-width: 200px;">
            <strong>Toyota Astra</strong>
          </div>
          <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; flex: 1; min-width: 200px;">
            <strong>PLN Persero</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Prestasi Section -->
<section class="section" style="background: #f8f9fa;">
  <div class="container">
    <div class="section-title fade-in-up">
      <h2>Kegiatan & Prestasi</h2>
      <p>Pencapaian dan aktivitas yang membanggakan</p>
    </div>
    
    <div class="card fade-in-up">
      <div class="card-body">
        <div class="grid grid-2">
          <div>
            <h3 style="color: #ff5f81ff; margin-bottom: 1.5rem;">Kegiatan Rutin</h3>
            <ul style="color: #666; padding-left: 1.5rem;">
              <li>Festival P5 (Projek Penguatan Profil Pelajar Pancasila)</li>
              <li>Jumat Literasi</li>
              <li>Program pembiasaan karakter</li>
              <li>Workshop teknologi terkini</li>
              <li>Kunjungan industri</li>
            </ul>
          </div>
          <div>
            <h3 style="color: #ff5f81ff; margin-bottom: 1.5rem;">Prestasi</h3>
            <ul style="color: #666; padding-left: 1.5rem;">
              <li>Juara LKS (Lomba Kompetensi Siswa) tingkat nasional</li>
              <li>Prestasi OSN (Olimpiade Sains Nasional)</li>
              <li>Juara KKS (Kompetisi Keterampilan Siswa)</li>
              <li>Penghargaan sekolah berprestasi</li>
              <li>Akreditasi A untuk semua program keahlian</li>
            </ul>
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
