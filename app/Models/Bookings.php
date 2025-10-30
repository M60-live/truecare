<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Schema;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'notes',
        'booking_start',
        'booking_end',
        'created_at',
    ];

    public $timestamps = false;

    public function get_bookings()
    {
        return DB::table('bookings')
            ->orderByDesc('booking_start')->get();
    }

    public function get_bookings_by_date($date)
    {
        return DB::table('bookings')
            ->whereRaw('LEFT(booking_start,10) = ?',[$date])
            ->orderByDesc('booking_start')->get();
    }

    public function insert_booking(array $data)
    {
        return Bookings::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'contact'       => $data['contact'],
            'notes'         => $data['notes'],
            'booking_start' => $data['booking_start'],
            'booking_end'   => $data['booking_end'],
            'created_at'    => now()
        ]);
    }
}
