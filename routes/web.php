<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\legalController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',      [HomeController::class, 'home']);
Route::get('/city',      [CityController::class, 'common']);


Route::get('/legal/aviso',      [legalController::class, 'aviso']);
Route::get('/legal/cookies',      [legalController::class, 'cookies']);
Route::get('/legal/privacidad',      [legalController::class, 'privacidad']);

Route::post('/presupuesto',      [HomeController::class, 'sendForm']);
