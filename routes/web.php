<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ForgotPasswordController;
// use App\Http\Controllers\ResetPasswordController; // Uncomment if needed
use Illuminate\Support\Facades\Route;

// Landing Routes
Route::get('/', [LandingController::class, 'index']);
Route::get('/admin', [LandingController::class, 'admin'])->middleware('admin')->name('admin.dashboard');
Route::get('/seller', [LandingController::class, 'bestSeller']);
Route::get('/arival', [LandingController::class, 'newArrival']);
Route::get('/tentang', [LandingController::class, 'tentang']);

// Login and Logout Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Forgot Password Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showResetRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

// // Reset Password Routes
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Barang Routes
Route::resource('barang', BarangController::class);
