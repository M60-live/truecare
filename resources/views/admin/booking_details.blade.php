@extends('layout.layout')
@section('content')

    <section class="container">

        <div class="row my-5">
            <div class="col col-md-2">
                <a href="/dashboard" class="btn btn-primary primary-button"><span class="fa fa-arrow-circle-left"></span> Go Back</a>
            </div>
            <div class="col col-md-10">

                <div class="card text-center">
                    <div class="card-header">
                        Patient Details
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $Booking->name }}</h5>
                        <p class="card-text text-start">
                            Email: <strong>{{ $Booking->email }}</strong><br>
                            Contact: <strong>{{ $Booking->contact }}</strong><br>
                            Booking Date: <strong>{{ date('d M Y', strtotime($Booking->booking_start)) }}</strong><br>
                            Booking Starting: <strong>{{ date('H:i:s', strtotime($Booking->booking_start)) }}</strong><br>
                            Booking Ending: <strong>{{ date('H:i:s', strtotime($Booking->booking_end)) }}</strong><br>
                            <button class="btn btn-sm btn-outline-dark primary-button">Update Date/Time</button>
                        </p>
                        <p class="card-text text-start">
                            <span class="mt-3"><strong>Patient Notes:</strong></span>
                            {{ $Booking->notes }}
                        </p>

                        <div class="card-text text-start mb-3">
                            <strong>Add Notes:</strong>
                            <form method="POST" action="/booking/{{ $Booking->id }}/note">
                                @csrf
                                <textarea name="note" class="form-control form-text" cols="3" rows="4" placeholder="Doctor's notes/codes"></textarea>
                                <button class="btn btn-dark primary-button mt-2">Add Note</button>
                            </form>
                        </div>
{{--                        <a href="#" class="btn btn-primary primary-button">Confirm Booking</a>--}}
                    </div>
                    <div class="card-footer text-body-secondary">
                        <button class="btn btn-outline-dark primary-button">Cancel Booking</button>
                        <button class="btn btn-dark primary-button"><span class="fa fa-check-circle"></span> Confirm Booking</button>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
