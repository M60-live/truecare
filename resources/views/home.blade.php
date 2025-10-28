@extends('layout.layout')
@section('content')

<section class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="padding-top: 3.3em;padding-bottom: 3.3em;">A Holistic Approach To Every Smile</h1>
        </div>
    </div>

    <div class="row">
        <div class="col dental-block">
            <div class="overlay">
                <div class="block-content">
                    <a href="/bookings" class="btn btn-light primary-button me-2">Book Appointment <span class="fa fa-arrow-circle-right"></span></a>
                    <a href="/services" class="btn btn-dark primary-button">Check Our Services</a>
                </div>
            </div>
        </div>
        <div class="col wellness-block">
            <div class="overlay">
                <div class="block-content">
                    <a href="/shop" class="btn btn-light primary-button">Wellness Store <span class="fa fa-arrow-circle-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-5">

    <div class="row">
        <h3 class="mb-4">Services</h3>
        <div class="col col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Teeth Whitening</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">30min</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="" class="btn btn-light primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Extractions</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="" class="btn btn-light primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-md-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="card-title mb-4">Operating Hours</h3>
                    <p class="card-text">
                        <strong>Weekdays:</strong> 8:30am - 4:30pm<br>
                        <strong>Saturdays: <span class="text-danger">CLOSED</span></strong><br>
                        <strong>Sundays:</strong> 10:00am - 1:00pm<br>
                        Walk-ins are also welcomed.
                    </p>
                    <p class="card-text">
                        <strong>Address:</strong> 21 Jump Dr, Halfway House, Midrand, 2001
                    </p>
                    <div class="text-center">
                        <a href="" class="btn btn-dark primary-button">Make Bookings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
