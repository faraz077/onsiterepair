<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\aboutusController;
use App\Http\Controllers\website\contactusController;
use App\Http\Controllers\website\buydeviceController;
use App\Http\Controllers\website\selldeviceController;
use App\Http\Controllers\website\repairadeviceController;
use App\Http\Controllers\website\trackorderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/about-us', aboutusController::class);
Route::resource('contact-us', contactusController::class);

