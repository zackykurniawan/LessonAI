<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat', [ChatController::class, 'chat']);

Route::get('/', function () {
    return view('dashboard');
});

Route::get('template', function () {
    return view('layouts.template');
});

Route::get('lupa', function () {
    return view('auth.passwords.reset2');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth'])->group(function () {

// Route Halaman Dashboard
Route::get('dashboard', function () {
    return view('dashboard');
});

// Route Halaman Jurusan
Route::resource('jurusan', JurusanController::class);
Route::get('jurusan/{jurusan}', [JurusanController::class, 'destroy']);

// Route Halaman Siswa
Route::resource('siswa', SiswaController::class);
Route::get('siswa/{siswa}', [SiswaController::class, 'destroy']);
    
// });