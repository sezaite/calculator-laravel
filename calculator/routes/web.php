<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SudetisController;
use App\Http\Controllers\AtimtisController;
use App\Http\Controllers\DaugybaController;
use App\Http\Controllers\DalybaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sudetis/{a}/{b}', [SudetisController::class, 'index']);

Route::get('/atimtis/{a}/{b}', [AtimtisController::class, 'index']);

Route::get('/daugyba/{a}/{b}', [DaugybaController::class, 'index']);

Route::get('/dalyba/{a}/{b}', [DalybaController::class, 'index']);
