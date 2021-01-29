<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
