<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Bookings = (new Bookings())->get_bookings();

        $date = date('Y-m-d', strtotime(now() . "-1 day"));
        $yesterdaysBookings = count((new Bookings())->get_bookings_by_date($date));

        $date = date('Y-m-d', strtotime(now()));
        $todaysBookings = count((new Bookings())->get_bookings_by_date($date));

        $date = date('Y-m-d', strtotime(now() . "+1 day"));
        $tomorrowsBookings = count((new Bookings())->get_bookings_by_date($date));

        return view('dashboard', [
            'Bookings' => $Bookings,
            'yesterdaysBookings' => $yesterdaysBookings,
            'todaysBookings' => $todaysBookings,
            'tomorrowsBookings' => $tomorrowsBookings,
        ]);
    }
}
