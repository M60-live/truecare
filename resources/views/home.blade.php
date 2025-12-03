@extends('layout.layout')
@section('content')

<section class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="padding-top: 4.2em;padding-bottom: 4.2em;">A Holistic Approach To Every Smile</h1>
        </div>
    </div>

    <div class="row">
        <div class="col dental-block">
            <div class="overlay">
                <div class="block-content">
                    <a href="/bookings" class="btn btn-light primary-button me-md-2 me-0">Book Appointment <span class="fa fa-arrow-circle-right"></span></a>
                    <a href="/services" class="btn btn-dark primary-button mt-md-0 mt-2">Check Our Services</a>
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
                            <h5 class="card-title">General Dentistry</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">30min</h6>
                                    <p class="card-text">Comprehensive care to maintain your oral health and address day-to-day dental needs.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Restorative Dentistry</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">Repairing and replacing teeth to restore function, comfort, and confidence.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Cosmetic Dentistry</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">Enhancing your smile with safe, modern aesthetic treatments.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Surgical Dentistry</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Friendly, gentle dental care for children of all ages.</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Myofunctional & Interceptive Orthodontics</h5>
                            <div class="row">
                                <div class="col col-md-8">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">45min</h6>
                                    <p class="card-text">A natural, preventive system designed for growing children and early teens.</p>
                                </div>
                                <div class="col col-md-4">
                                    <a href="/bookings" class="btn btn-outline-dark primary-button">Make Bookings</a>
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
                        <strong>Mon-Fri:</strong> 9:00am - 5:00pm<br>
                        <strong>Weekends and Public Holidays: <span class="text-danger">CLOSED</span></strong><br>
                    </p>
                    <div class="text-center mb-4">
                        <a href="/bookings" class="btn btn-dark primary-button">Make Bookings</a>
                    </div>
                    <h5 class="card-title mb-0"><i class="fa fa-map-marker"></i> Location:</h5>
                    <p class="card-text">
                        Panorama Shopping Centre, Cnr Kliprivier Drive & Jordi Street, Mulbarton, Johannesburg South, 2197
                    </p>

                    <h5 class="card-title mb-0"><i class="fa fa-car"></i> Parking:</h5>
                    <p class="card-text">
                        Free unshaded and shaded parking space
                    </p>

                </div>
            </div>
        </div>

    </div>

    @include('common/whatsapp')

</section>
@endsection
