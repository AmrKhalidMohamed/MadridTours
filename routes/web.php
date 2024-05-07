<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourViewController;
use App\Http\Controllers\ImageViewController;
use App\Http\Controllers\BookingViewController;
use App\Http\Controllers\CustomerViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("/customersview", CustomerViewController::class);
Route::get('/customers/{customer}/edit', [CustomerViewController::class, 'edit'])->name('customersview.edit');
Route::post('/customersview/{id}', [CustomerViewController::class, 'update'])->name('customersview.update');
Route::resource("/bookingsview", BookingViewController::class);
Route::post('/bookingsview/{id}', [BookingViewController::class, 'update'])->name('bookingsview.update');
Route::resource("/toursview", TourViewController::class);
Route::post('/toursview/{id}', [TourViewController::class, 'update'])->name('toursview.update');
Route::resource("/imagesview", ImageViewController::class);


require __DIR__.'/auth.php';
