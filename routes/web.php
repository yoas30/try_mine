<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [TampilDataController::class, 'tampilkanData']);

Route::get('/alat/{id}/edit', [TampilDataController::class, 'edit'])->name('alat.edit');

Route::put('/alat/{id}', [TampilDataController::class, 'update'])->name('alat.update');

Route::delete('/alat/{id}', [TampilDataController::class, 'destroy'])->name('alat.destroy');
