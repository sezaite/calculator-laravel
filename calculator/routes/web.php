<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\SudetisController;
use App\Http\Controllers\AtimtisController;
use App\Http\Controllers\DaugybaController;
use App\Http\Controllers\DalybaController;
use App\Http\Controllers\PostCalculatorController;
use App\Http\Controllers\KvadratuController;

Route::get('/', [LayoutController::class, 'index']);

Route::get('/sudetis/{a}/{b}', [SudetisController::class, 'index']);

Route::get('/atimtis/{a}/{b}', [AtimtisController::class, 'index']);

Route::get('/daugyba/{a}/{b}', [DaugybaController::class, 'index']);

Route::get('/dalyba/{a}/{b}', [DalybaController::class, 'index']);

Route::get('/calc', [PostCalculatorController::class, 'show'])->name('show-calc');
Route::post('/calc', [PostCalculatorController::class, 'calc'])->name('do-smth');

// vienu atveju i /kvadratu pateksiu per post, kita karta - per get metoda. skirtingi patekimo i ta pati puslapi budai paleis ir skirtingus metodus, aprasytus tame paciame konroleryje: 
Route::get('/kvadratu', [KvadratuController::class, 'show'])->name('show-smth');
Route::post('/kvadratu', [KvadratuController::class, 'calc'])->name('do-math');

