@extends('layout.layout')
@section('content')

    <section class="container">

        <div class="row my-5">
            <div class="col">
                <p>
                    <strong>NB:</strong> Please note that <strong>Sundays</strong> are open for walk in on <strong>first-come first-serve</strong> basis.<br>
                    No need for booking.<br>
                    We are open from <u>9:00</u> in the morning till <u>13:00</u> in the afternoon.
                </p>
            </div>
            <div class="col text-end">

                <button type="button" class="btn btn-dark primary-button" data-bs-toggle="modal" data-bs-target="#addEventModal">
                    Book Appointment
                </button>

                <div class="modal fade modal-lg" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="/confirm-booking">
                                @csrf
                                <input type="hidden" name="bookingDate" id="bookingDate" value="" />
                                <input type="hidden" name="bookingTime" id="bookingTime" value="" />
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col col-md-7">
                                            <p class="text-start">Please complete and confirm the details below and your booking will be ready.</p>
                                            <hr>
                                            <p class="text-start mb-0"><u><strong>Booking for:</strong></u></p>
                                            <div class="text-start">Date: <strong class="eventDataDate"></strong></div>
                                            <div class="text-start">Time: <strong class="eventDataTime"></strong></div>

                                            <p class="text-start mt-3"><u><strong>Fill in your details below:</strong></u></p>

                                            <input class="form-control mt-3" type="text" placeholder="Full Name" name="name" id="patentName" required />

                                            <input class="form-control mt-2" type="email" placeholder="Email" name="email" id="patientEmail" required />

                                            <input class="form-control mt-2" type="text" placeholder="Cell Number" name="contact" id="patientContact" required />

                                            <textarea rows="4" class="form-control mt-2" placeholder="Consultation notes:" name="service" required></textarea>

                                        </div>
                                        <div class="col col-md-5">
                                            <img src="{{ asset('/img/booking.jpg') }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark primary-button" data-bs-dismiss="modal">Cancel Booking</button>
                                    <button type="sumbit" class="btn btn-dark primary-button">Confirm Booking <span class="fa fa-check-circle"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="calendar" class="mb-5"></div>
            </div>
        </div>

        <div class="row mb-5 mt-3">
            <div class="col">
                <p>You can also make a booking via our WhatsApp number: <strong>0791343222</strong></p>
            </div>
        </div>

    </section>

@endsection

@section("javascript")
    <script type='text/javascript' src='{{ asset('/fullcalendar/index.global.js') }}'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                // headerToolbar: { right: 'dayGridMonth,timeGridWeek' },
                eventColor: '#70A6C2',
                weekends: false,
                allDaySlot: false,
                slotDuration: '00:30:00',
                scrollTime: false,
                scrollTimeReset: false,
                height: 'auto',
                slotMinTime: '09:00:00',
                slotMaxTime: '17:00:00',
                events: '/get-calendar-bookings',
                dateClick: function(info) {
                    const addEventModal = new bootstrap.Modal('#addEventModal', {
                        keyboard: false
                    })
                    const eventModal = document.getElementById('addEventModal');
                    const dateInput = document.getElementById('bookingDate');
                    const timeInput = document.getElementById('bookingTime');
                    var bodyDate = eventModal.querySelector('.eventDataDate')
                    var bodyTime = eventModal.querySelector('.eventDataTime')
                    var eventData = info.dateStr
                    var date = eventData.substring(0,10)
                    var time = eventData.substring(11,19)

                    bodyDate.textContent = date
                    bodyTime.textContent = time
                    dateInput.value = date
                    timeInput.value = time
                    addEventModal.show();
                }
            });
            calendar.render();
        })

    </script>
@endsection
