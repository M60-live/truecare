@extends('layout.layout')
@section('content')

    <section class="container">

        <div class="row my-5">
            <div class="col">
                <p>
                    <strong>NB:</strong> Please note that Sundays are open for walk in on first-come first-serve basis.<br>
                    No need for booking.<br>
                    We are open from 9:00 in the morning till 13:00 in the afternoon.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="calendar" class="mb-5"></div>
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
                weekends: false,
                allDaySlot: false,
                slotDuration: '00:30:00',
                scrollTime: false,
                scrollTimeReset: false,
                height: 'auto',
                slotMinTime: '09:00:00',
                slotMaxTime: '17:00:00',
                events: '/get-calendar-bookings'
            });
            calendar.render();
        })

    </script>
@endsection
