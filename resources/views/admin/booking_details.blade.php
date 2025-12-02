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
                        <div class="row">
                            <div class="col-12">
                                <h5 class="card-title">{{ $Booking->name }}</h5>
                            </div>
                            <div class="col col-md-9">
                                <p class="card-text text-start">
                                    Email: <strong>{{ $Booking->email }}</strong><br>
                                    Contact: <strong>{{ $Booking->contact }}</strong><br>
                                    Booking Date: <strong>{{ date('l d M Y', strtotime($Booking->booking_start)) }}</strong><br>
                                    Booking Time: <strong>{{ date('H:i', strtotime($Booking->booking_start)) }}</strong> - <strong>{{ date('H:i', strtotime($Booking->booking_end)) }}</strong>
                                </p>
                                <p class="card-text text-start">
                                    <span class="mt-3"><strong>Patient Notes:</strong></span>
                                    {{ $Booking->notes }}
                                </p>
                            </div>
                            <div class="col col-md-3">
                                <button class="btn btn-sm btn-outline-dark primary-button">Update Date/Time</button>
                            </div>
                        </div>
                        <hr>
                        {{--<div class="row">
                            <div class="col">
                                <div class="card-text text-start mb-3 mt-5">
                                    <strong class="">Doctor's notes/codes:</strong>
                                    <form method="POST" action="/booking/{{ $Booking->id }}/note">
                                        @csrf
                                        <textarea name="note" class="form-control form-text" cols="3" rows="4" placeholder="Type your notes here..."></textarea>
                                        <button class="btn btn-dark primary-button mt-2">Add Note</button>
                                    </form>
                                </div>
                                --}}{{--                        <a href="#" class="btn btn-primary primary-button">Confirm Booking</a>--}}{{--
                            </div>
                        </div>--}}
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
