<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('bookings');
    }

    public function getCalendarBookings(Request $request)
    {
        $events = [
            [
                'title' => 'Booked 1',
                'start'=> '2025-10-28T09:30:00'
            ], [
                'title' => 'Booked 2',
                'start'=> '2025-10-28T11:30:00'
            ], [
                'title' => 'Booked 3',
                'start'=> '2025-10-29T09:00:00'
            ], [
                'title' => 'Booked 4',
                'start'=> '2025-10-30T13:00:00'
            ], [
                'title' => 'Booked Nov ',
                'start'=> '2025-11-03T13:00:00'
            ],
        ];
        return $events;
    }

    public function confirmBooking(Request $request)
    {
        dd($request->all());
    }
}
