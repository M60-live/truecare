@extends('layout.layout')

@section('title')
    Our Services
@endsection

@section('content')

    <section class="container my-5">
        <div class="row">
            <div class="col">
                <div class="col about-block">
                    <div class="overlay">
                        <div class="">
                            <h1 class="text-center" style="padding-top: 3.6em;padding-bottom: 3.6em;">Our Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">General Dentistry</h5>
                                <p class="card-text">Comprehensive care to maintain your oral health and address day-to-day dental needs.</p>
                                <ul class="">
                                    <li>Consultations & Full Dental Examinations</li>
                                    <li>Digital X-rays</li>
                                    <li>Professional Cleanings (Scaling & Polishing)</li>
                                    <li>Tooth-Coloured Fillings</li>
                                    <li>Fissure Sealants</li>
                                </ul>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent1.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">Restorative Dentistry</h5>
                                <p class="card-text">Repairing and replacing teeth to restore function, comfort, and confidence.</p>
                                <ul class="">
                                    <li>Crowns & Bridges</li>
                                    <li>Dentures (false teeth)</li>
                                    <li>Inlays & Onlays</li>
                                </ul>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">Cosmetic Dentistry</h5>
                                <p class="card-text">Enhancing your smile with safe, modern aesthetic treatments.</p>
                                <ul class="">
                                    <li>Teeth Whitening (Express In-Office & Take-Home Options)</li>
                                    <li>Composite & Porcelain Veneers</li>
                                    <li>Cosmetic Bonding for minor chips, gaps, and shape correction</li>
                                </ul>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">Surgical Dentistry</h5>
                                <ul class="">
                                    <li>Simple & Complex Extractions</li>
                                    <li>Impacted Tooth Removal</li>
                                    <li>Minor Oral Surgery</li>
                                </ul>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">Paediatric Dentistry</h5>
                                <p class="card-text">Friendly, gentle dental care for children of all ages.</p>
                                <ul class="">
                                    <li>Infant, Child & Teen Dental Visits</li>
                                    <li>Preventive Cleanings & Check-Ups</li>
                                    <li>Sealants & Early Cavity Management</li>
                                    <li>Habit correction (thumb sucking, grinding, tongue thrusting etc.) & Early jaw development guidance</li>
                                </ul>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col col-md-3">
                                <img src="{{ asset('/img/dent.jpg') }}" class="img-fluid" />
                            </div>
                            <div class="col col-md-6">
                                <h5 class="card-title">Myofunctional & Interceptive Orthodontics</h5>
                                <h6 class="card-title">Myobrace & Myosa</h6>
                                <p class="card-text">A natural, preventive system designed for growing children and early teens. <br>Myobrace helps improve:</p>
                                <ul class="">
                                    <li>Breathing</li>
                                    <li>Tongue posture</li>
                                    <li>Swallowing patterns</li>
                                    <li>Jaw growth & alignment</li>
                                </ul>
                                <p class="card-text">By managing & correcting oral habits early, Myobrace & Myosa reduces the need for fixed braces and TMJ problems later in life.</p>
                            </div>
                            <div class="col col-md-3">
                                <a href="/bookings" class="btn btn-outline-dark primary-button">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('common/whatsapp')

    </section>

@endsection
