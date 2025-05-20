<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use Carbon\Carbon;

class DeleteExpiredBookings extends Command
{
    protected $signature = 'bookings:deleteExpired';
    protected $description = 'Menghapus booking yang sudah melewati waktu appointment';

    public function handle()
    {
        $deletedRows = Booking::where('appointment_time', '<', Carbon::now())->delete();
        $this->info("Berhasil menghapus $deletedRows booking expired");
        return 0;
    }
}