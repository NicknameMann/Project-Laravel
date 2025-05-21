<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home - SOBERS Barbershop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <script>
    function toggleMenu() {
      const nav = document.querySelector('.nav-links');
      nav.classList.toggle('active');
    }
  </script>
</head>

<body>

  <header class="hero">
    <nav class="navbar">
      <div class="brand">SOBERS</div>
      <div class="hamburger" onclick="toggleMenu()">☰</div>
      <div class="nav-links">
        <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
        <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('tentangkami') }}" class="{{ Request::is('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
      </div>
    </nav>

    <div class="content">
      <br>
      <br>

      <a href="{{ route('bookings.create') }}" class="btn">BOOK NOW</a>
    </div>
  </header>

  <section class="slider testimoni">
    <div class="slider-wrapper">
      <img src="{{ asset('picture/sobers1.png') }}" class="active" alt="Gambar 1">
      <img src="{{ asset('picture/sobers2.jpg') }}" alt="Gambar 2">
    </div>
    <div class="nav-btn left">&#10094;</div>
    <div class="nav-btn right">&#10095;</div>
  </section>


  <section class="pricelist">
    <img src="{{ asset('picture/pricelist.jpg') }}" alt="Pricelist">
  </section>

  <section class="slider comments">
    <img src="{{ asset('picture/komen1.jpg') }}" class="active" alt="Gambar 1">
    <img src="{{ asset('picture/komen2.jpg') }}" alt="Gambar 2">
    <img src="{{ asset('picture/komen3.jpg') }}" alt="Gambar 3">
    <img src="{{ asset('picture/komen4.jpg') }}" alt="Gambar 4">
    <img src="{{ asset('picture/komen5.jpg') }}" alt="Gambar 5">
    <div class="nav-btn left">&#10094;</div>
    <div class="nav-btn right">&#10095;</div>
  </section>
  @include('footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>