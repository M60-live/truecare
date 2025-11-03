<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('bookings');
    }

    public function getCalendarBookings(Request $request)
    {

        /*$events = [
            [
                'title' => 'Booked 1',
                'start'=> '2025-10-28T09:30:00'
            ], [
                'title' => 'Booked 2',
                'start' => '2025-10-28T11:30:00',
                'end'   => '2025-10-28T12:00:00'
            ], [
                'title' => 'Booked 3',
                'start' => '2025-10-29T09:00:00'
            ], [
                'title' => 'Booked 4',
                'start' => '2025-10-30T13:00:00'
            ], [
                'title' => 'Booked Nov ',
                'start' => '2025-11-03T13:00:00'
            ],
        ];*/

        $Bookings = (new Bookings())->get_bookings();
        $count = 0;
        $events = [];
        foreach ($Bookings as $booking)
        {
            $events[$count]['title'] = 'Booked';
            $events[$count]['start'] = str_replace(' ','T', $booking->booking_start);
            $events[$count]['end'] = str_replace(' ','T', $booking->booking_end);
            $count++;
        }
        return $events;
    }

    public function confirmBooking(Request $request)
    {
        $Booking = new Bookings();

        $data = [];
        $start_date = $request->get('bookingDate') . ' ' . $request->get('bookingTime');
        $end_date   = date('Y-m-d H:i:s', strtotime($start_date . '+30 minutes'));

        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['contact'] = $request->get('contact');
        $data['notes'] = $request->get('service');
        $data['booking_start'] = $start_date;
        $data['booking_end'] = $end_date;
        if($Booking->insert_booking($data))
        {
            session()->flash('status', 'ok');
        }

        return redirect('/bookings');
    }
}
