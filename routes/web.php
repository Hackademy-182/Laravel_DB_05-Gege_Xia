<?php

use App\Http\Controllers\AnnuncioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/annunci', [AnnuncioController::class, 'index']);
Route::post('/annunci', [AnnuncioController::class, 'store']);
