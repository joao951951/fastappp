<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [OfferController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [OfferController::class, 'index'])->middleware(['auth', 'verified']);

Route::post('/', 'controller_api@request')->name('/')->middleware('cors');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/offer', [OfferController::class, 'add'])->name('offer.add');
    Route::post('/offer', [OfferController::class, 'store'])->name('offer.store');
    Route::delete('{offer}', [OfferController::class, 'destroy'])->name('offer.destroy');
});

require __DIR__.'/auth.php';
