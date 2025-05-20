<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Menampilkan daftar booking
    public function index()
    {
        // Hapus booking yang sudah expired (misalnya, appointment_time sudah lewat)
        Booking::where('appointment_time', '<', Carbon::now())->delete();

        // Ambil semua booking yang belum expired, diurutkan berdasarkan waktu booking (atau created_at)
        $bookings = Booking::orderBy('created_at', 'asc')->get();

        return view('bookings.index', compact('bookings'));
    }

    // Menampilkan form untuk membuat booking baru
    public function create()
    {
        return view('bookings.create');
        // Ambil booking terbaru (jika ada)
    $latestBooking = \App\Models\Booking::orderBy('created_at','desc')->first();

    return view('bookings.create', compact('latestBooking'));
    }

    // Menyimpan booking baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|string',
            'phone'            => 'required|string',
            'appointment_time' => 'required|date',
            'service'          => 'required|string',
        ]);

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->appointment_time = $request->appointment_time;
        $booking->service = $request->service;
        $booking->notes = $request->notes;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibuat!');
    }

    // Menampilkan form edit booking
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('bookings.edit', compact('booking'));
    }

    // Memperbarui data booking
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'             => 'required|string',
            'phone'            => 'required|string',
            'appointment_time' => 'required|date',
            'service'          => 'required|string',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->appointment_time = $request->appointment_time;
        $booking->service = $request->service;
        $booking->notes = $request->notes;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diperbarui!');
    }

    // Menghapus booking (bisa digunakan untuk membatalkan booking)
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibatalkan!');
    }
}