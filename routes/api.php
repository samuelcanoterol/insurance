<?php

use App\Http\Controllers\API\OwnerApiController;
use App\Http\Controllers\API\CarApiController;
use Illuminate\Support\Facades\Route;

Route::get('/owners', [OwnerApiController::class, 'index']);
Route::get('/owners/{id}', [OwnerApiController::class, 'show']);
Route::post('/owners', [OwnerApiController::class, 'store']);
Route::put('/owners/{id}', [OwnerApiController::class, 'update']);
Route::delete('/owners/{id}', [OwnerApiController::class, 'destroy']);

Route::get('/cars', [CarApiController::class, 'index']);
Route::get('/cars/{id}', [CarApiController::class, 'show']);
Route::post('/cars', [CarApiController::class, 'store']);
Route::put('/cars/{id}', [CarApiController::class, 'update']);
Route::delete('/cars/{id}', [CarApiController::class, 'destroy']);
