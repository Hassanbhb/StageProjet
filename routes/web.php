<?php

use App\Http\Controllers\ExperienceController;
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

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/voyages', [ExperienceController::class, 'index']);

Route::get('/voyages/{id}', [ExperienceController::class, 'show']);

Route::get('/account', function () {
    return view('account');
});

Route::get('/cree', function () {
    return view('cree');
});
