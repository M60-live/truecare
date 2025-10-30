@extends('layout.layout')
@section('content')

    <section class="container">

        <div class="row my-5">
            <div class="col">

                <div class="d-flex align-items-start" style="min-height: 400px;">
                    <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Dasboard</button>
                        <button class="nav-link active" id="v-pills-bookings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bookings" type="button" role="tab" aria-controls="v-pills-bookings" aria-selected="true">Bookings</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Patients</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent" style="width: 100%;">
                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col col-md-3">
                                    <div class="card text-black-50">
                                        <h5 class="text-center">Yesterday</h5>
                                        <h3 class="text-center">{{ $yesterdaysBookings }}</h3>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="card shadow">
                                        <h4 class="text-center">Today's Bookings</h4>
                                        <h1 class="text-center">{{ $todaysBookings }}</h1>
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="card text-black-50">
                                        <h5 class="text-center">Tomorrow</h5>
                                        <h3 class="text-center">{{ $tomorrowsBookings }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="v-pills-bookings" role="tabpanel" aria-labelledby="v-pills-bookings-tab" tabindex="0">
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
                                            <td>[View/Update]</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Patients detail matrix</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            You are logged in as <strong>{{ Auth::user()->name }}</strong><br>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-dark primary-button mt-3">Log out <span class="fa fa-power-off"></span></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
