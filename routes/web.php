<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','admin'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
 Route::get('/doctor/dashboard',[DoctorController::class,'docdas'])->name('docdas')->middleware('auth','web','doctor');
 Route::get('/admin/dashboard',[AdminController::class,'admindas'])->name('admindas')->middleware('auth','web','doctor');
 Route::get('/patient/dashboard',[PatientController::class,'patdas'])->name('patdas')->middleware('auth','web','doctor');
require __DIR__.'/auth.php';
