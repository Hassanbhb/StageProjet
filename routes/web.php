<?php

use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UpdateData;

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
})->middleware('alreadyLoggedIn');

Route::get('/voyages', [ExperienceController::class, 'index']);
Route::post('/voyages', [ExperienceController::class, 'filter']);
Route::get('/voyages/cree', [ExperienceController::class, 'create']);
Route::get('/voyages/{id}', [ExperienceController::class, 'show']);

Route::get('/account', function () {
    return view('account');
})->middleware('isLoggedIn');

Route::get('/cree', function () {
    return view('cree');
});
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/profile', [AuthController::class, 'loginIn']);
Route::get('/logout', [AuthController::class, 'logOut']);
Route::post('/update/{id}', [AuthController::class, 'update'])->name('update');
Route::post('/user', [ExperienceController::class, 'addExp'])->name('addExp');
