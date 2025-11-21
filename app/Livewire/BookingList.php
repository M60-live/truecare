<?php

namespace App\Livewire;

use App\Models\Bookings;
use Livewire\Component;

class BookingList extends Component
{
    public $Bookings;
    public $search_item = null;
    public $todaysBooking = true;

    public function render()
    {
        if (empty($this->search_item)) {
            if ($this->todaysBooking) {
                $this->Bookings = (new Bookings())->todays_bookings();
            } else {
                $this->Bookings = (new Bookings())->get_bookings();
            }
        } else {
            $this->Bookings = (new Bookings())->search_booking($this->search_item);
        }


        return view('livewire.booking-list', ['Bookings' => $this->Bookings]);
    }
}
