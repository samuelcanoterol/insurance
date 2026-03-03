<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;

Route::get('/owners/{id}/delete', [OwnerController::class, 'destroy'])->name('owners.delete');
Route::resource('owners', OwnerController::class);

Route::post('/cars/{id}/update', [CarController::class, 'update'])->name('cars.update');
Route::resource('cars', CarController::class);
