<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [TampilDataController::class, 'tampilkanData']);
