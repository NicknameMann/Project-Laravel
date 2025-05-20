<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>service</title>
    <link rel="website icon" type="png"
    href="wallpaper/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">

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

    <header class="hero">
        <h1>Layanan Kami</h1>
        <p>Pilihan layanan terbaik dari Barbershop SOBERS</p>
    </header>

    <section class="services">
        <div class="service-card">
            <h3>Hair Colour</h3>
            <p>Warnai rambutmu sesuai selera.</p>
        </div>
        <div class="service-card">
            <h3>Hair Consult</h3>
            <p>rekomendasi terkait perawatan, gaya, dan masalah rambut.</p>
        </div>
        <div class="service-card">
            <h3>Hair Styling</h3>
            <p>styling sesuai bentuk wajah dan kepribadianmu.</p>
        </div>
    </section>

   <!-- Layanan: Gaya Potongan Rambut Terbaru -->
<section class="service-feature">
    <div class="service-feature-text">
      <p>
        Gaya setiap salon tentu berbeda, tetapi perbedaan barbershop dan salon terletak pada kapsternya yang memahami gaya terkini dari tatanan rambut pria. Mulai yang biasa digunakan oleh selebritas ternama hingga berdasarkan jenis lagu yang disukai. Semua pengetahuan ini hadir karena kesamaan pola pikir dan pemikiran pria. Bahkan para konsumen bisa bertanya potongan rambut apa yang cocok dengan wajah dan kepribadian sehingga hasilnya sempurna.
      </p>
    </div>
  </section>
  
  <section class="zigzag-section">
    <!-- Bagian atas: Gambar di kiri, teks di kanan -->
    <div class="zigzag-item">
      <div class="zigzag-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5hv0HRSPW2bXBkQB4qiR0qvBz1fiSMLnPuw&s" alt="Vitamin Rambut">
      </div>
      <div class="zigzag-text">
        <h2>Hair cut</h2>
        <p>
          Potong rambut dengan penampilan yang kamu inginkan.
        </p>
      </div>
    </div>
  
    <!-- Bagian bawah: Urutan terbalik (teks di kiri, gambar di kanan) -->
    <div class="zigzag-item alternate">
      <div class="zigzag-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxVcKvTwgu1Ieumd8njX4t5aBCQb16SXW-uA&s" alt="DI ARFA Barbershop">
      </div>
      <div class="zigzag-text">
        <h2>Hair wash</h2>
        <p>
          bersihkan rambut dan kulit kepala dari kotoran, minyak, dan sisa produk dengan menggunakan shampoo dan air.
        </p>
      </div>
    </div>

    <div class="zigzag-item">
      <div class="zigzag-image">
        <img src="https://i0.wp.com/makarizoprofessional.com/wp-content/uploads/2017/03/sd-hair-tonic_merge-1.png?fit=640%2C640&ssl=1" alt="Vitamin Rambut">
      </div>
      <div class="zigzag-text">
        <h2>Hair Tonic</h2>
        <p>
          perawatan rambut yang dirancang untuk meningkatkan kesehatan dan kekuatan rambut, terutama membantu mengatasi masalah rambut rontok.
        </p>
      </div>
    </div>

    <div class="zigzag-item alternate">
      <div class="zigzag-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-ScUXM6cVj1OQr1nUlxLMxjgUxITlOqS64g&s" alt="DI ARFA Barbershop">
      </div>
      <div class="zigzag-text">
        <h2>Blow Dry</h2>
        <p>
          penataan rambut dengan menggunakan pengering rambut (hair dryer) dan sikat untuk mengeringkan dan membentuk rambut sekaligus.
        </p>
      </div>
    </div>

    <div class="zigzag-item">
      <div class="zigzag-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT54Ml-kpaxV9KXdyzKig08N3Wrw3q3RfiH7w&s" alt="Vitamin Rambut">
      </div>
      <div class="zigzag-text">
        <h2>Styling Product</h2>
        <p>
          menata atau membentuk rambut menggunakan berbagai alat dan produk untuk mencapai tampilan tertentu.
        </p>
      </div>
    </div>
  </section>

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

    <script src="js/script.js"></script>
</body>
</html>