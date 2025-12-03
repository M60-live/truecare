@extends('layout.layout')

@section('title')
    Contact Us
@endsection

@section('content')

    <section class="container my-5">
        <div class="row">
            <div class="col">
                <gmp-map
                    center="-26.296146,28.045301"
                    zoom="14"
                    map-id="DEMO_MAP_ID"
                    style="height: 400px"
                >
                    <gmp-advanced-marker
                        position="-26.296146,28.045301"
                        title="Panorama Shopping Centre"
                    ></gmp-advanced-marker>
                </gmp-map>
            </div>
        </div>
    </section>

    <section class="container my-6">
        <div class="row">
            <h3 class="card-title mb-4">Feel free to get in touch with us using the below information:</h3>

            <div class="col-md-6">
                <p class="ms-3">
                    <span class="fa fa-phone"></span> Telephone: <strong>065 943 3852</strong>
                </p>
                <p class="ms-3">
                    <span class="fa fa-whatsapp"></span> Whatsapp: <strong>065 943 3852</strong><br>
                </p>
                <p class="ms-3">
                    <span class="fa fa-envelope"></span> Email: <strong>admin@truecaredentisrty.co.za</strong><br>
                </p>
                <p class="ms-3">
                    <span class="fa fa-map-marker"></span> location: <strong>Panorama Shopping Centre,
                        Cnr Kliprivier Drive & Jordi Street, Mulbarton, Johannesburg South, 2197
                    </strong>
                </p>
            </div>

            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="emailAddress" placeholder="name@example.com" required />
                                <label for="emailAddress">Email Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="contact" class="form-control" id="contact" placeholder="+27++++++" required />
                                <label for="contact">Phone Number</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" rows="15" cols="5"></textarea>
                                <label for="password">Message Us</label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-dark primary-button">Send Message <span class="fa fa-arrow-circle-right"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container my-5">
        @include('common/whatsapp')
    </section>

@endsection

@section('javascript')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqCPl54GCYZmlqKNUuoD8Zvp8i7H0cj6E&libraries=maps,marker&v=beta"
        defer
    ></script>
    <script>
        async function initMap() {
            console.log("Maps JavaScript API loaded.");
        }

        window.initMap = initMap;
    </script>
@endsection
