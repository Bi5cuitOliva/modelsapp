<?php

use App\Http\Controllers\Productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/products', [Productcontroller::class,'index']);
Route::resource('/products', Productcontroller::class);
