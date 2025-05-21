<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - SOBERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">

    <style>
        .hero {
            min-height: 100vh;
            background: url("{{ asset('wallpaper/tentang-kami.jpg') }}") no-repeat center center/cover;
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
                <a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Service</a>
                <li>
                <a href="{{ url('tentang') }}" class="{{ Request::is('tentang') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Booking</a>
            </div>
        </div>
    </div>

    <div class="konten-halaman4">
        <h1 class="judul">Tentang SOBERS</h1>
        <p class="deskripsi">SOBERS bukan sekadar barbershop. Kami adalah tempat di mana gaya, kenyamanan, dan kepercayaan diri bertemu.</p>

        <div class="galeri">
            <img src="{{ asset('picture/tim1.jpg') }}" alt="Tim 1">
            <img src="{{ asset('picture/tim2.jpg') }}" alt="Tim 2">
            <img src="{{ asset('picture/tim3.jpg') }}" alt="Tim 3">
        </div>
    </div>

    <div class="navigasi-halaman">
        <a href="{{ url('katalog') }}" class="btn-kembali">← Kembali ke Katalog</a>
    </div>

    <footer>
        <p>&copy; 
            <script>document.write(new Date().getFullYear());</script>
            SOBERS. Seluruh Hak Cipta Dilindungi.
        </p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
