<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
    <link rel="website icon" type="image/png" href="{{ asset('wallpaper/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Rujukan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">
            <a href="/">SOBERS</a>        
        </div>    
    </div>

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

    <!-- Footer -->
    <footer style="background-color: #111; color: white; padding: 20px 0; text-align: center; width: 100%; position: relative;">
        <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
            <div class="social-icons">
                <a href="https://wa.me/6285235388971" target="_blank">
                    <img src="{{ asset('picture/whatsapp-icon.png') }}" alt="WhatsApp" class="sosmed-icon">
                </a>
                <a href="https://instagram.com/sobers.barbershop/" target="_blank">
                    <img src="{{ asset('picture/instagram-icon.png') }}" alt="Instagram" class="sosmed-icon">
                </a>
            </div>

            <div class="logo-container">
                <img src="{{ asset('picture/logo-barbershop.jpg') }}" alt="Logo Barbershop" class="sosmed-icon">
            </div>

            <div style="flex: 1; min-width: 250px;">
                <p><strong>Jl. Terusan Surabaya No. 53, Kota Malang</strong></p>
                <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
                <p><strong>RESERVASI? HUBUNGI KAMI</strong></p>
                <p style="font-size: 20px;">0852-3538-8971</p>
                <hr style="width: 80%; margin: 20px auto; border-color: #fff;">
                <a href="https://maps.app.goo.gl/hsPV89auhmcbL8Xo9" target="_blank" style="color: #00f; display: inline-block; margin-top: 10px;">Klik Untuk Melihat Lokasi</a>
            </div>

            <div style="flex: 1; min-width: 250px;"></div>
        </div>
        <p style="margin-top: 20px; font-size: 15px;">© 2025 SOBERS Barbershop. All rights reserved.</p>
    </footer>
</body>
</html>