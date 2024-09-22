<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index']);
Route::get('/book-ticket', [BookingController::class,'create'])->name('ticket.create');
Route::post('/book-seats', [BookingController::class,'bookSeats'])->name('book.seat');

Route::get('/admin-panel', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/event-list',[EventController::class,'index'])->name('event.list');
    Route::get('/event-create',[EventController::class,'create'])->name('event.create');
    Route::post('/event-store',[EventController::class,'store'])->name('event.store');
});

require __DIR__.'/auth.php';
