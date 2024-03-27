<?php

use App\Http\Controllers\NamaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/nama', 'NamaController@index');
Route::get('/nama', [NamaController::class, 'index'])->name('nama.index');
