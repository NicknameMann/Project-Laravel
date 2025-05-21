<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
    <link rel="website icon" type="image/png" href="{{ asset('wallpaper/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Rujukan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
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
        <a href="{{ route('bookings.create') }}" class="{{ Request::is('booking*') ? 'active' : '' }}">Edit Booking</a>
      </div>
    </nav>

    <!-- Container notifikasi -->
    <div id="notification-container"></div>

    <!-- Section kontainer utama -->
    <div class="booking-container">
        <h1 class="page-title">Edit Booking</h1>

        @if($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="form-card">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $booking->name) }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Telepon:</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone', $booking->phone) }}" required>
            </div>
            <div class="form-group">
                <label for="appointment_time">Waktu Appointment:</label>
                <input type="datetime-local" name="appointment_time" id="appointment_time" value="{{ old('appointment_time', date('Y-m-d\TH:i', strtotime($booking->appointment_time))) }}" required>
            </div>
            <div class="form-group">
                <label for="service">Service:</label>
                <select name="service" id="service" required>
                    <option value="">-- Pilih Service --</option>
                    <option value="Hair colour" {{ (old('service', $booking->service) == 'Hair colour') ? 'selected' : '' }}>Hair colour</option>
                    <option value="Hair consult" {{ (old('service', $booking->service) == 'Hair consult') ? 'selected' : '' }}>Hair consult</option>
                    <option value="Hair stylish" {{ (old('service', $booking->service) == 'Hair stylish') ? 'selected' : '' }}>Hair stylish</option>
                    <option value="Haircut" {{ (old('service', $booking->service) == 'Haircut') ? 'selected' : '' }}>Haircut</option>
                    <option value="Hair wash" {{ (old('service', $booking->service) == 'Hair wash') ? 'selected' : '' }}>Hair wash</option>
                    <option value="Hair tonic" {{ (old('service', $booking->service) == 'Hair tonic') ? 'selected' : '' }}>Hair tonic</option>
                    <option value="Blow dry" {{ (old('service', $booking->service) == 'Blow dry') ? 'selected' : '' }}>Blow dry</option>
                    <option value="Styling product" {{ (old('service', $booking->service) == 'Styling product') ? 'selected' : '' }}>Styling product</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Catatan (Opsional):</label>
                <textarea name="notes" id="notes">{{ old('notes', $booking->notes) }}</textarea>
            </div>

            <div class="button-container">
                <button type="submit" class="btn-submit">Update Booking</button>
                <a href="{{ route('bookings.index') }}" class="btn-view">Kembali ke Daftar Booking</a>
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
</body>
</html>