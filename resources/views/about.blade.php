@extends('layout.layout')
@section('content')

    <section class="container my-5">
        <div class="row">
            <div class="col">
                <div class="col about-block">
                    <div class="overlay">
                        <div class="">
                            <h1 class="text-center" style="padding-top: 3.6em;padding-bottom: 3.6em;">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col">
                <p>
                    At <strong>True Care Dentistry & Wellness</strong>, we believe your mouth is the gateway to your body —
                    and your smile reflects your overall well-being.
                    <br>Our practice combines evidence-based dental care with a holistic philosophy,
                    focusing not just on treating teeth, but on supporting your full-body health through mindful,
                    nature-aligned solutions.
                </p>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="card-title mb-4">Our Integrated Approach</h3>
                <div class="card shadow-lg">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="">Biocompatible, minimally invasive dentistry</li>
                            <li class="">Toxin-free treatments</li>
                            <li class="">Oral hygiene, nutritional & lifestyle guidance for oral and systemic health</li>
                            <li class="">Wellness-based oral products from nature backed by science</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="card-title mb-4">How We Care</h3>
                <div class="card shadow-lg">
                    <div class="card-body">
                        <ul class="list-group">
                            <li>Quality, gentle, patient-centered care</li>
                            <li>Calming, child & special-needs friendly environment</li>
                            <li>Tailored treatment plans for holistic wellness</li>
                            <li>Integrated and comprehensive care approach</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        @include('common/whatsapp')
    </section>

@endsection
