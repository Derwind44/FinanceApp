<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'indexHome'])->name('dashboard');
Route::get('/expense', [DataController::class,'index'])->name('expense');
Route::get('/report', [DataController::class,'indexReport'])->name('report');
Route::get('/data-delete/{id}',[DataController::class,'destroy'])->name('data.destroy');
Route::post('/data-store', [DataController::class,'store'])->name('data.store');


