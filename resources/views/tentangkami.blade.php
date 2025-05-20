<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - SOBERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

    <!-- Navbar -->
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

    <!-- Hero Section -->
    <section style="background-color:rgba(139, 89, 14, 0.57); padding: 100px 20px; text-align: center; color: #222;">
        <h1 style="font-size: 3rem; font-weight: bold;">Tentang Kami</h1>
        <p style="font-size: 1.2rem;">Kenali lebih dekat SOBERS Barbershop dan nilai yang kami bawa.</p>
    </section>

   <!-- Filosofi SOBERS -->
<section style="background-color:rgba(139, 89, 14, 0.58); padding: 100px 20px; text-align: center; color: #222;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold;">
        Filosofi SOBERS
    </h2>
    <div style="max-width: 800px; margin: 30px auto; font-size: 1rem; line-height: 1.8; text-align: justify; color: #333;">
        <p>
            Di SOBERS, kami percaya bahwa setiap potongan rambut adalah bentuk ekspresi diri. Kami menggabungkan keahlian profesional dengan pelayanan personal, sehingga setiap kunjungan menjadi pengalaman yang berkesan.
        </p>
    </div>
</section>


    
<!-- Sejarah Berdirinya -->
<section style="background-color:rgba(139, 89, 14, 0.58); padding: 100px 20px; text-align: center; color: #222;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold;">
        Sejarah Berdirinya SOBERS Barbershop
    </h2>
    <div style="max-width: 800px; margin: 30px auto; font-size: 1rem; line-height: 1.8; text-align: justify; color: #333;">
        <p>
            SOBERS Barbershop didirikan pada tahun 2020 oleh sekelompok pemuda di Kota Malang yang memiliki passion tinggi terhadap dunia barbering dan fashion pria.
            Berawal dari sebuah garasi kecil, SOBERS tumbuh dengan filosofi memberikan pelayanan terbaik, suasana nyaman, serta potongan rambut yang trendi dan sesuai karakter pelanggan.
        </p>
        <p>
            Dengan semangat "Style that speaks", SOBERS terus berkembang menjadi barbershop pilihan utama, tak hanya karena keahlian tim kami,
            tetapi juga karena pengalaman hangat yang kami hadirkan di setiap kunjungan.
        </p>
    </div>
</section>

    <!-- Footer -->
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
 <div style="width: 100%;">
  <p style="margin: 0 auto; text-align: center; font-size: 14px; color: white;">
    © 2025 SOBERS Barbershop. All rights reserved.
  </p>
</div>

</footer>


  <!-- Ganti rujukan ke file JS -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>