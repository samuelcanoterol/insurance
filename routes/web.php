<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/setLanguage/{lang}', [App\Http\Controllers\LangController::class, 'setLanguage'])->name('setLanguage');

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth', 'role']], function () {

    Route::get('/owners/{id}/delete', [OwnerController::class, 'destroy'])->name('owners.delete');
    Route::resource('owners', OwnerController::class)->except(['index']);

    Route::post('/cars/{id}/update', [CarController::class, 'update'])->name('cars.update');
    Route::resource('cars', CarController::class)->except(['index']);
});

