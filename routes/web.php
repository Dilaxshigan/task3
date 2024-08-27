<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\order;
use App\Http\Controllers\product;
use App\Http\Controllers\slider;

Route::get("/", [order::class, 'order'])->name('order');
Route::get("/product", [product::class, 'product'])->name('product');
Route::get("/slider", [slider::class, 'slider'])->name('slider');
Route::get("/add_product", [product::class, 'add_product'])->name('add_product');