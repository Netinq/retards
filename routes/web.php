<?php

use Illuminate\Support\Facades\Route;

Route::resource('app', \App\Http\Controllers\RetardController::class);
Route::get('/', [\App\Http\Controllers\RetardController::class, 'index']);
