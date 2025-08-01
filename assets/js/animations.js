// Fade-in animation on scroll
document.addEventListener('DOMContentLoaded', function() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  // Initialize fade-in animations
  document.querySelectorAll('.fade-in-up').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
  });
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 100) {
    navbar.style.background = 'rgba(255, 255, 255, 0.98)';
    navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
  } else {
    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
    navbar.style.boxShadow = 'none';
  }
});

// Mobile menu functionality
function toggleMobileMenu() {
  const nav = document.querySelector('.navbar-nav');
  const menuBtn = document.querySelector('.mobile-menu-btn');
  
  if (nav.classList.contains('active')) {
    nav.classList.remove('active');
    menuBtn.classList.remove('active');
  } else {
    nav.classList.add('active');
    menuBtn.classList.add('active');
  }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(e) {
  const nav = document.querySelector('.navbar-nav');
  const menuBtn = document.querySelector('.mobile-menu-btn');
  
  if (!nav.contains(e.target) && !menuBtn.contains(e.target)) {
    nav.classList.remove('active');
    menuBtn.classList.remove('active');
  }
});

// Form validation and enhancement
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        isValid = false;
        field.style.borderColor = '#dc3545';
      } else {
        field.style.borderColor = '#f0f0f0';
      }
    });
    
    if (!isValid) {
      e.preventDefault();
      alert('Mohon lengkapi semua field yang wajib diisi.');
    }
  });
});

// Add loading animation to buttons
document.querySelectorAll('.btn').forEach(btn => {
  btn.addEventListener('click', function() {
    if (this.type === 'submit') {
      const originalText = this.textContent;
      this.textContent = 'Memproses...';
      this.disabled = true;
      
      setTimeout(() => {
        this.textContent = originalText;
        this.disabled = false;
      }, 2000);
    }
  });
}); 