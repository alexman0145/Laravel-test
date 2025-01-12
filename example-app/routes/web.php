<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [\App\Http\Controllers\HelloController::class, 'hello']);
