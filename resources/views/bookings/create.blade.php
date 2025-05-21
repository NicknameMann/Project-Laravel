<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="website icon" type="image/png" href="{{ asset('wallpaper/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Rujukan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
     <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
 <div class="hero">
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


                <!-- Container notifikasi -->
        <div id="notification-container"></div>

       <!-- Section kontainer utama -->
<div class="booking-container">
    <h1 class="page-title">Buat Booking Baru</h1>

    @if($errors->any())
        <div class="error-messages">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="booking-form" action="{{ route('bookings.store') }}" method="POST" class="form-card">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>

        <div class="form-group">
            <label for="appointment_time">Waktu Appointment</label>
            <input type="datetime-local" name="appointment_time" id="appointment_time" value="{{ old('appointment_time') }}" required>
        </div>

        <div class="form-group">
            <label for="service">Service</label>
            <select name="service" id="service" required>
                <option value="">-- Pilih Service --</option>
                <option value="Hair colour" {{ old('service') == 'Hair colour' ? 'selected' : '' }}>Hair colour</option>
                <option value="Hair consult" {{ old('service') == 'Hair consult' ? 'selected' : '' }}>Hair consult</option>
                <option value="Hair stylish" {{ old('service') == 'Hair stylish' ? 'selected' : '' }}>Hair stylish</option>
                <option value="Haircut" {{ old('service') == 'Haircut' ? 'selected' : '' }}>Haircut</option>
                <option value="Hair wash" {{ old('service') == 'Hair wash' ? 'selected' : '' }}>Hair wash</option>
                <option value="Hair tonic" {{ old('service') == 'Hair tonic' ? 'selected' : '' }}>Hair tonic</option>
                <option value="Blow dry" {{ old('service') == 'Blow dry' ? 'selected' : '' }}>Blow dry</option>
                <option value="Styling product" {{ old('service') == 'Styling product' ? 'selected' : '' }}>Styling product</option>
            </select>
        </div>

        <div class="form-group">
            <label for="notes">Catatan (Opsional)</label>
            <textarea name="notes" id="notes">{{ old('notes') }}</textarea>
        </div>

        <div class="button-container">
            <button type="submit" class="btn-submit">Buat Booking</button>
            <a href="{{ route('bookings.index') }}" class="btn-view">Daftar Booking</a>
        </div>
    </form>
 </div>
</div>

  @include('footer')

  <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('active');
    }
  </script>
        <!-- Sertakan file JS notifikasi -->
        <script src="{{ asset('js/notification.js') }}"></script>
        @if(session('success'))
            <script>
                document.addEventListener("DOMContentLoaded", function(){
                    showNotification("{{ session('success') }}", "success");
                });
            </script>
        @endif
        @if(session('error'))
            <script>
                document.addEventListener("DOMContentLoaded", function(){
                    showNotification("{{ session('error') }}", "error");
                });
            </script>
        @endif



    </div>
</body>
</html>