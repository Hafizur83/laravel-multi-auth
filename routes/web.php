<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController as DashboardControllerAd;
use App\Http\Controllers\Author\DashboardController as DashboardControllerAu;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);


Route::middleware(['auth', 'admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', [DashboardControllerAd::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'author'])->prefix('author')->as('author.')->group(function () {
    Route::get('/dashboard', [DashboardControllerAu::class, 'index'])->name('dashboard');
});





Auth::routes();