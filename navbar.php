<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 0.5rem;">
      SMK Negeri 64 Jakarta
    </a>
    
    <div class="navbar-nav">
      <a class="nav-link" href="index.php">Beranda</a>
      <a class="nav-link" href="profil.php">Profil</a>
      <a class="nav-link" href="berita.php">Berita</a>
      <a class="nav-link" href="kontak.php">Kontak</a>
    </div>
    
    <!-- Mobile menu button -->
    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<style>
.mobile-menu-btn {
  display: none;
  flex-direction: column;
  background: none;
  border: none;
  cursor: pointer;
  padding: 0.5rem;
}

.mobile-menu-btn span {
  width: 25px;
  height: 3px;
  background: #1a1a1a;
  margin: 3px 0;
  transition: 0.3s;
}

@media (max-width: 768px) {
  .mobile-menu-btn {
    display: flex;
  }
  
  .navbar-nav {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    flex-direction: column;
    padding: 1rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  }
  
  .navbar-nav.active {
    display: flex;
  }
  
  .navbar-nav .nav-link {
    padding: 1rem 0;
    border-bottom: 1px solid #f0f0f0;
  }
}
</style>


