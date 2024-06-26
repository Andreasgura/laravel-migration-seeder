<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Models\Train;

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

Route::get('/', [TrainController::class, 'index'])->name('home');
Route::get('/trani-in-partenza-oggi', [TrainController::class, 'showTodayDepartures'])->name('today');
// Route::get('/tratta-roma-napoli', [TrainController::class, 'romeToNaples'])->name('romeToNaples');
Route::get('/{departureStation}/{arrivalStation}', [TrainController::class, 'chooseDepartureArrival'])->name('romeToNaples');
