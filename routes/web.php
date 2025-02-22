<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{category}', [ProductController::class, 'index']);
Route::get('/user/{id}/{name}', [UserController::class, 'profile']);
Route::get('/sales', [SalesController::class, 'index']);
