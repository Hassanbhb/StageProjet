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

Route::get('/',[App\Http\Controllers\UsersController::class,'index1']);

Route::get('/',[App\Http\Controllers\UsersController::class,'index']);
Route::post('/account', [App\Http\Controllers\UsersController::class,'store'])->name('store');
Route::post('/', [App\Http\Controllers\UsersController::class,'index'])->name('index');
  
Route::post('/check', [App\Http\Controllers\UsersController::class,'check'])->name('login.check');
Route::post('/', [App\Http\Controllers\UsersController::class,'logout'])->name('users.logout');
Route::get('/login', [App\Http\Controllers\UsersController::class,'index1'])->name('users.login');
Route::get('/account', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');


