<div>
    <div class="col col-md-3 mb-3">
        <input class="form-control" name="search_item" id="search_item" wire:model.live="search_item" placeholder="Search" />
    </div>
    <table class="table table-responsive table-hover table-light">
        <thead>
        <tr class="table-primary">
            <th>Booking Date</th>
            <th>Patient Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Notes</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Bookings as $booking)
            <tr>
                <td><strong>{{ date('d M Y H:i:s', strtotime($booking->booking_start)) . ' - ' . date('H:i:s', strtotime($booking->booking_end)) }}</strong></td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->contact }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->notes }}</td>
                <td><a href="/booking/{{ $booking->id }}">[View/Update]</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
