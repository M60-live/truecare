<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/frequently-asked-questions', function () {
    return view('faqs');
});

Route::get('/bookings', [BookingController::class, 'booking'])->name('bookings');
Route::get('/get-calendar-bookings', [BookingController::class, 'getCalendarBookings'])->name('getCalendarBookings');
Route::post('/confirm-booking', [BookingController::class, 'confirmBooking'])->name('confirmBooking');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('profile.edit');
    Route::get('/booking/{id}', [AdminController::class, 'viewBooking'])->name('booking.view');
    Route::put('/booking/{id}/update', [AdminController::class, 'updateBooking'])->name('booking.update_datetime');
    Route::post('/booking/{id}/note', [AdminController::class, 'addBookingNote'])->name('booking.add_booking_note');
    Route::put('/booking/{id}/confirm', [AdminController::class, 'confirmBooking'])->name('booking.confirm');
});

require __DIR__.'/auth.php';
