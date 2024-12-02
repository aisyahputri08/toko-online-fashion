<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/register', function () {
    return view('register');
});


// Halaman Login
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// Halaman Dashboard (hanya dapat diakses setelah login)
Route::middleware('auth')->get('/home', function () {
    return view('home'); // Buat tampilan home untuk pengguna yang sudah login
});
