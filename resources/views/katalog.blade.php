<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katalog</title>
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
            <div class="brand">SOBERS</div>
            <div class="nav-links">
                <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ url('katalog') }}" class="{{ Request::is('katalog') ? 'active' : '' }}">Katalog</a>
                <a href="#">Service</a>
                <a href="#">Tentang kami</a>
                <a href="#">Booking</a>
            </div>
        </div>
    </div>

    <div class="katalog">
        <img src="{{ asset('picture/katalog2.jpg') }}" alt="Gambar 1">
        <img src="{{ asset('picture/katalog3.jpg') }}" alt="Gambar 2">
        <img src="{{ asset('picture/katalog4.jpg') }}" alt="Gambar 3">
    </div>

    <div class="end">
        <img src="{{ asset('picture/katalogakhir.jpg') }}" alt="End">
    </div>
  
    <div class="banner" style="position: relative;">
        <a class="map-link" href="https://maps.app.goo.gl/hsPV89auhmcbL8Xo9" target="_blank">Klik Untuk Melihat Lokasi</a>
    </div>

    <footer>
        <p>&copy; 
            <script>document.write(new Date().getFullYear());</script>
            SOBERS. All rights reserved.
        </p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>