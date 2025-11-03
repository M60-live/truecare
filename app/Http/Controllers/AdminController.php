<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewBooking (Request $request, $booking_id)
    {
        $Booking = (new Bookings())->booking($booking_id);

        return view('admin.booking_details', [
            'Booking' => $Booking
        ]);
    }

    public function updateBooking (Request $request, $booking_id)
    {
        dd($booking_id, $request->all());
    }

    public function addBookingNote (Request $request, $booking_id)
    {
        // *** Fill `created by` field
        dd($booking_id, $request->all());
    }

    public function confirmBooking (Request $request, $booking_id)
    {
        dd($booking_id, $request->all());
    }
}
