<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WalletController;


Route::get('/', function () {
    return view('welcome');});

    Route::get('/tables', [MobilController::class, 'mobil']);
    Route::get('/tables_member', [MemberController::class, 'index']);
    Route::get('/wallet', [WalletController::class, 'wallet']);
    Route::get('/create_mobil', function () { return view('mobil.create');});
    Route::get('create-pdf1',[MemberController::class, 'createPDF'])->name('create-pdf1');
    Route::get('create-pdf',[MobilController::class, 'createPDF'])->name('create-pdf');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/tables_member', MemberController::class);
    Route::resource('/tables_mobil', MobilController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
