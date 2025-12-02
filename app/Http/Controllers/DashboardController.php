<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d', strtotime(now() . "-1 day"));
        $yesterdaysBookingsCount = count((new Bookings())->get_bookings_by_date($date));

        $date = date('Y-m-d', strtotime(now()));
        $todaysBookingsCount = count((new Bookings())->get_bookings_by_date($date));

        $date = date('Y-m-d', strtotime(now() . "+1 day"));
        $tomorrowsBookingsCount = count((new Bookings())->get_bookings_by_date($date));

        return view('dashboard', [
            'yesterdaysBookingsCount' => $yesterdaysBookingsCount,
            'todaysBookingsCount'     => $todaysBookingsCount,
            'tomorrowsBookingsCount'  => $tomorrowsBookingsCount,
        ]);
    }
}
