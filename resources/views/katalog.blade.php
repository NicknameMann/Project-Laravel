<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katalog</title>
    <link rel="website icon" type="png"
    href="wallpaper/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menggunakan helper asset() agar referensi ke CSS diproses dengan benar -->
    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">

    <style>
        .hero {
            min-height: 100vh;
            background: url("{{asset('wallpaper/katalog.jpg')}}") no-repeat center center/cover;
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
            <div class="nav-links">
                <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
                <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
                <a href="{{ url('tentangkami') }}" class="{{ Request::is('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
            </div>
        </div>
    </div>

    <div class="katalog">
        <img src="{{ asset('picture/katalog2.jpg') }}" alt="Gambar 1">
        <img src="{{ asset('picture/katalog3.jpg') }}" alt="Gambar 2">
        <img src="{{ asset('picture/katalog4.jpg') }}" alt="Gambar 3">
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

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>