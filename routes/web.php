<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login', 301);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/submit-login', [LoginController::class, 'submitLogin'])->name('submit.login');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/submit-register', [RegisterController::class, 'submitRegister'])->name('submit.register');

Route::get('/forget-password', [ForgetPasswordController::class, 'forgetpassword'])->name('forget.password');
Route::post('/submit-forget-password', [ForgetPasswordController::class, 'submitforgetpassword'])->name('submit.forget.password');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/submit-reset-password', [ResetPasswordController::class, 'SubmitResetPassword'])->name('submit.reset.password');

Route::middleware('auth.check')->group(function () {
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
