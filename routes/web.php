<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\aboutusController;
use App\Http\Controllers\website\contactusController;
use App\Http\Controllers\website\buydeviceController;
use App\Http\Controllers\website\selldeviceController;
use App\Http\Controllers\website\repairadeviceController;
use App\Http\Controllers\website\trackorderController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\DeviceController;
use App\Http\Controllers\dashboard\ManifacturerController;
use App\Http\Controllers\dashboard\ModelController;
use App\Http\Controllers\dashboard\IssueController;




Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/about-us', aboutusController::class);
Route::resource('/buy-device', buydeviceController::class);
Route::resource('/ontact-us', contactusController::class);
// Route::resource('/dashboard-panel', DashboardController::class);
Route::resource('/devices', DeviceController::class);
Route::resource('/manufacturer', ManifacturerController::class);
Route::resource('/models', ModelController::class);
Route::resource('/issues', IssueController::class);





