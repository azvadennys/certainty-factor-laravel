<?php

use App\Http\Controllers\CFController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SerumController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingPage::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('serums', SerumController::class);
});
Route::get('/cf-form', [CFController::class, 'showForm'])->name('cf.form');
Route::post('/calculate-cf', [CFController::class, 'calculateCF'])->name('calculate.cf');

require __DIR__ . '/auth.php';
