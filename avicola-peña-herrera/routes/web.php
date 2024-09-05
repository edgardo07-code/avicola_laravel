<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Customers
Route::resource('/customers', CustomerController::class);

// Products
Route::resource('/products', ProductController::class);

// Orders
Route::resource('/orders', OrderController::class);
