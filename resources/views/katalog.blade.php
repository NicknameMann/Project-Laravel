<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Katalog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


  <style>
    img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .hero {
      width: 100%;
      min-height: 70vh;
      height: auto;
      background: url("{{ asset('wallpaper/katalog.jpg') }}") no-repeat center center / cover;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    @media (min-width: 1024px) {
      .hero {
        min-height: 100vh;
      }
    }
    @media (min-width: 769px) and (max-width: 1023px) {
      .hero {
        min-height: 30vh;
        background-position: center top;
      }
    }
    @media (max-width: 768px) {
      .hero {
        min-height: 30vh;
      }
    }

    @media (max-width: 480px) {
      .hero {
        min-height: 30vh;
      }
    }
  </style>

  <script>
    function toggleMenu() {
      document.querySelector('.nav-links').classList.toggle('active');
    }
  </script>
</head>

<body style="margin: 0; display: flex; flex-direction: column; min-height: 100vh;">
  <div class="hero">
    <div class="navbar">
      <div class="brand">SOBERS</div>
      <div class="hamburger" onclick="toggleMenu()">☰</div>
      <div class="nav-links">
        <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
        <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('tentangkami') }}" class="{{ Request::is('tentangkami') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
      </div>
    </div>
  </div>


  <main style="flex: 1;">
    <div class="katalog">
      <img src="{{ asset('picture/katalog2.jpg') }}" alt="Gambar 1">
      <img src="{{ asset('picture/katalog3.jpg') }}" alt="Gambar 2">
      <img src="{{ asset('picture/katalog4.jpg') }}" alt="Gambar 3">
    </div>


  </main>
  @include('footer')
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>