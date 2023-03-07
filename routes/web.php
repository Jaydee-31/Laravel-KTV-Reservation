<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('reservations', ReservationsController::class);