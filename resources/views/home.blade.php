<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="website icon" type="png"
  href="wallpaper/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Ganti rujukan CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <style>
    .hero {
      min-height: 100vh;
      background: url("wallpaper/homePage3.jpg") no-repeat center center/cover;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-size: 100% 100%;
    }
  </style>

</head>
<body>
  <div class="hero">
    <div class="navbar">
      <div class="brand">
        <a href="/">SOBERS</a></div>
        <!-- Tombol hamburger -->
        <div class="hamburger" onclick="toggleMenu()">☰</div>
        <div class="nav-links" id="navLinks">
      <div class="nav-links">
        <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
        <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('tentangkami') }}" class="{{ Request::is('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
      </div>
    </div>

    <div class="content">
      <a href="{{ route('bookings.create') }}" class="btn">BOOK NOW</a>
    </div>
  </div>
  
  <div class="slider testimoni">
    <img src="{{ asset('picture/sobers1.png') }}" class="active" alt="Gambar 1">
    <img src="{{ asset('picture/sobers2.jpg') }}" alt="Gambar 2">
    <!-- Tombol navigasi -->
    <div class="nav-btn left">&#10094;</div>
    <div class="nav-btn right">&#10095;</div>
  </div>

  <div class="pricelist">
    <img src="{{ asset('picture/pricelist.jpg') }}" alt="Pricelist">
  </div>
    
  <div class="slider comments">
    <img src="{{ asset('picture/komen1.jpg') }}" class="active" alt="Gambar 1">
    <img src="{{ asset('picture/komen2.jpg') }}" alt="Gambar 2">
    <img src="{{ asset('picture/komen3.jpg') }}" alt="Gambar 3">
    <img src="{{ asset('picture/komen4.jpg') }}" alt="Gambar 4">
    <img src="{{ asset('picture/komen5.jpg') }}" alt="Gambar 5">
    <!-- Tombol navigasi -->
    <div class="nav-btn left">&#10094;</div>
    <div class="nav-btn right">&#10095;</div>
  </div>

  <footer 
    style="background-color: #111; color: white; padding: 20px 0; text-align: center;">
  <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
    
  <div class="social-icons">
  <a href="https://wa.me/6285235388971" target="_blank">
    <img src="{{ asset('picture/whatsapp-icon.png') }}" alt="WhatsApp" class="sosmed-icon">
  </a>
  <a href="https://instagram.com/sobers.barbershop/" target="_blank">
    <img src="{{ asset('picture/instagram-icon.png') }}" alt="Instagram" class="sosmed-icon">
  </a>
</div>

    
   <!-- Kiri: Logo dan Motto -->
   <div class="logo-container">
  <img src="{{ asset ('picture/logo-barbershop.jpg') }}" alt="Logo Barbershop" class="sosmed-icon">
</div>


    <!-- Tengah: Alamat dan Kontak -->
    <div style="flex: 1; min-width: 250px;">
      <p><strong>Jl. Terusan Surabaya No. 53, Kota Malang</strong></p>
      <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
      <p><strong>RESERVASI? HUBUNGI KAMI</strong></p>
      <p style="font-size: 20px;">0852-3538-8971</p>
      <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
      <a href="https://maps.app.goo.gl/hsPV89auhmcbL8Xo9" target="_blank" style="color: #00f; display: inline-block; margin-top: 10px;">Klik Untuk Melihat Lokasi</a>
    </div>

    <!-- Kanan: Sosial Media -->
    <div style="flex: 1; min-width: 250px;">
    </div>

  </div>
  <p style=" right: 30%; margin-top: 20px; font-size: 15px;">© 2025 SOBERS Barbershop. All rights reserved.</p>
</footer>

  <!-- Ganti rujukan ke file JS -->
  <script src="{{ asset('js/script.js') }}"></script>
  <script>
  function toggleMenu() {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('show');
  }
  </script>
</body>
</html>