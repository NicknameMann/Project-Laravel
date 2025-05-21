<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Booking - Sobers Barbershop</title>
    <link rel="website icon" type="image/png" href="{{ asset('wallpaper/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <a href="{{ route('bookings.create') }}" class="btn-kembali">Kembali</a>

        <h1>Daftar Booking</h1>

        @if(session('success'))
            <div id="notification" class="notification success">
                {{ session('success') }}
            </div>
        @endif

        @if($bookings->isEmpty())
            <p class="no-data">Tidak ada booking.</p>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Waktu Appointment</th>
                        <th>Service</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $index => $booking)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ date('d-m-Y H:i', strtotime($booking->appointment_time)) }}</td>
                            <td>{{ $booking->service }}</td>
                            <td>{{ $booking->notes }}</td>
                            <td>
                                <a href="{{ route('bookings.edit', $booking->id) }}" class="btn-aksi">Edit</a>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-aksi btn-danger" onclick="return confirm('Batalkan booking?')">Batalkan</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="{{ asset('js/daftar.js') }}"></script>
</body>
</html>