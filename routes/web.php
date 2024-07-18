<?php

use App\Http\Controllers\TimeTellingController;
use Illuminate\Support\Facades\Route;

Route::get('/what-time-is-it', [TimeTellingController::class, 'timeNow']);

Route::get('/', function () {
    return view('welcome');
});
