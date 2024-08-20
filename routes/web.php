<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tabla1Controller;
use App\Http\Controllers\tabla2Controller;
use App\Http\Controllers\tabla3Controller;

Route::get('/', function () {
    return view('index');
});

Route::resource('tabla1', tabla1Controller::class);
Route::resource('tabla2', tabla2Controller::class);
Route::resource('tabla3', tabla3Controller::class);