<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('home');
});

Route::controller(Controllers\GuruController::class)->group(function () {
  Route::get('/guru', 'showAll')
    ->name('guru');
  Route::delete('/guru/destroy/{KdGuru}', 'destroy')
    ->name('guru.destroy');
});
Route::controller(Controllers\MapelController::class)->group(function () {
  Route::get('/mapel', 'showAll')
    ->name('mapel');
    Route::delete('/mapel/destroy/{NamaMapel}', 'destroy')
    ->name('mapel.destroy');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
