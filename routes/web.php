<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\IssueController;
use App\Http\Controllers\dashboard\ModelController;
use App\Http\Controllers\website\aboutusController;
use App\Http\Controllers\dashboard\DeviceController;
use App\Http\Controllers\website\buydeviceController;
use App\Http\Controllers\website\contactusController;
use App\Http\Controllers\website\selldeviceController;
use App\Http\Controllers\website\trackorderController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\website\repairadeviceController;
use App\Http\Controllers\dashboard\ManufacturerController;
use App\Http\Controllers\website\QouteController;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/place-order', function () {
        return view('quote-information-form');
    
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/sell-device', selldeviceController::class);
Route::resource('/buy-device', buydeviceController::class);
Route::resource('/about-us', aboutusController::class);
Route::resource('/contact-us', contactusController::class);
Route::resource('/dashboard-panel', DashboardController::class);
Route::resource('/devices', DeviceController::class);
Route::resource('/manufacturer', ManufacturerController::class);
Route::resource('/models', ModelController::class);
Route::resource('/issues', IssueController::class);
Route::resource('/instant-price-qoute', QouteController::class);
Route::post('/store-device-in-session', [App\Http\Controllers\website\QouteController::class, 'storeDevice'])->name('store-device-in-session');
Route::post('/store-manufacturer-in-session', [App\Http\Controllers\website\QouteController::class, 'storeManufacturer'])->name('store-manufacturer-in-session');
Route::post('/store-model-in-session', [App\Http\Controllers\website\QouteController::class, 'storeModel'])->name('store-model-in-session');
Route::post('/store-issues-in-session', [App\Http\Controllers\website\QouteController::class, 'storeIssue'])->name('store-issues-in-session');
Route::post('/store-location-in-session', [App\Http\Controllers\website\QouteController::class, 'storeLocation'])->name('store-location-in-session');
// Route::post('/place-order', [App\Http\Controllers\website\QouteController::class, 'placeOrder'])->name('place-order');







