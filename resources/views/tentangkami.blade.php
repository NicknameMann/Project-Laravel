<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - SOBERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>


     <header class="hero">
    <nav class="navbar">
      <div class="brand">SOBERS</div>
      <div class="hamburger" onclick="toggleMenu()">☰</div>
      <div class="nav-links" id="navLinks">
        <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
        <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('tentangkami') }}" class="{{ Request::is('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
      </div>
    </nav>


    <!-- Hero Section -->
    <section style="background-color:rgba(255, 229, 189, 0.858); padding: 100px 20px; text-align: center; color: #222;">
        <h1 style="font-size: 3rem; font-weight: bold;">Tentang Kami</h1>
        <p style="font-size: 1.2rem;">Kenali lebih dekat SOBERS Barbershop dan nilai yang kami bawa.</p>
    </section>

    <!-- Filosofi SOBERS -->
    <section style="background-color:rgba(255, 229, 189, 0.858); padding: 100px 20px; text-align: center; color: #222;">
        <h2 style="text-align: center; font-size: 2rem; font-weight: bold;">
            Filosofi SOBERS
        </h2>
        <div
            style="max-width: 800px; margin: 30px auto; font-size: 1rem; line-height: 1.8; text-align: justify; color: #333;">
            <p>
                Di SOBERS, kami percaya bahwa setiap potongan rambut adalah bentuk ekspresi diri. Kami menggabungkan
                keahlian profesional dengan pelayanan personal, sehingga setiap kunjungan menjadi pengalaman yang
                berkesan.
            </p>
        </div>
    </section>



    <!-- Sejarah Berdirinya -->
    <section style="background-color:rgba(255, 229, 189, 0.858); padding: 100px 20px; text-align: center; color: #222;">
        <h2 style="text-align: center; font-size: 2rem; font-weight: bold;">
            Sejarah Berdirinya SOBERS Barbershop
        </h2>
        <div
            style="max-width: 800px; margin: 30px auto; font-size: 1rem; line-height: 1.8; text-align: justify; color: #333;">
            <p>
                SOBERS Barbershop didirikan pada tahun 2020 oleh sekelompok pemuda di Kota Malang yang memiliki passion
                tinggi terhadap dunia barbering dan fashion pria.
                Berawal dari sebuah garasi kecil, SOBERS tumbuh dengan filosofi memberikan pelayanan terbaik, suasana
                nyaman, serta potongan rambut yang trendi dan sesuai karakter pelanggan.
            </p>
            <p>
                Dengan semangat "Style that speaks", SOBERS terus berkembang menjadi barbershop pilihan utama, tak hanya
                karena keahlian tim kami,
                tetapi juga karena pengalaman hangat yang kami hadirkan di setiap kunjungan.
            </p>
        </div>
    </section>

    @include('footer')


    <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('active');
    }
  </script>
    <!-- Ganti rujukan ke file JS -->
    <script src="{{ asset('js/script.js') }}"></script>


</body>

</html>