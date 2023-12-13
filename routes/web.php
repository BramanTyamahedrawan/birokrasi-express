<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KopSuratController;
use App\Http\Controllers\SuketDomisiliController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuketMenikahController;
use App\Http\Controllers\SuketSKCKController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('kop-surat', KopSuratController::class);
Route::resource('suket-domisili', SuketDomisiliController::class);
Route::resource('suket-menikah', SuketMenikahController::class);
Route::resource('suket-skck', SuketSKCKController::class);
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('register', [LoginController::class, 'create'])->name('register');
Route::get('/home', function () {
    return view('welcome');
})->name('home');
