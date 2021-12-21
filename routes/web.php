<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/login-proses', [LoginController::class, 'auth']);

Route::get('/dashboard', [LoginController::class, 'home'])->middleware('auth', 'CekRole:admin');

Route::get('/tambah-peserta', [LoginController::class, 'tambahpeserta'])->middleware('auth', 'CekRole:admin');

Route::post('/input-proses', [DashboardController::class, 'inputproses'])->middleware('auth', 'CekRole:admin');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth', 'CekRole:admin');