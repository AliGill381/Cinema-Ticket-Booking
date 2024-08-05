<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('movies/{id}', [DashboardController::class, 'movies']);
Route::get('showtimes/{id}/{id1}', [DashboardController::class, 'showTime']);
Route::any('user-ticket-booking', [DashboardController::class, 'userTicketBooking']);
Route::post('login_page', [DashboardController::class, 'login']);
 Route::get('/user-detail', [DashboardController::class, 'userDetail']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
