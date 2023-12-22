<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\IssueController;
use App\Http\Controllers\dashboard\ModelController;
use App\Http\Controllers\website\aboutusController;
use App\Http\Controllers\dashboard\DeviceController;
use App\Http\Controllers\website\buydeviceController;
use App\Http\Controllers\website\contactusController;
use App\Http\Controllers\website\selldeviceController;
use App\Http\Controllers\website\TrackorderController;
use App\Http\Controllers\website\TechnicianController;

use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\OrderController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\website\repairadeviceController;
use App\Http\Controllers\dashboard\ManufacturerController;
use App\Http\Controllers\website\QouteController;





Route::get('/', function () {
    return view('welcome');
});

// Route::get('/place-order', function () {
//         return view('quote-information-form');

// });




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/sell-device', selldeviceController::class);
Route::resource('/buy-device', buydeviceController::class);
Route::resource('/about-us', aboutusController::class);
Route::resource('/contact-us', contactusController::class);
Route::resource('/technician', TechnicianController::class);
Route::resource('/dashboard-panel', DashboardController::class);
Route::resource('/devices', DeviceController::class);
Route::resource('/manufacturer', ManufacturerController::class);
Route::resource('/models', ModelController::class);
Route::resource('/issues', IssueController::class);
Route::resource('/order', OrderController::class);
Route::get('/technician-new-order', [App\Http\Controllers\website\TechnicianController::class, 'newOrder'])->name('technician-new-order');

Route::get('/technician-complete-order', [App\Http\Controllers\website\TechnicianController::class, 'completeOrder'])->name('technician-active-order');
Route::get('/technician-profile-edit', [App\Http\Controllers\website\TechnicianController::class, 'profileEdit'])->name('technician-profile-edit');
Route::get('/technician-order-detail', [App\Http\Controllers\website\TechnicianController::class, 'technicianOrderDetail'])->name('technician-order-detail');
Route::get('/technician-active-order-detail', [App\Http\Controllers\website\TechnicianController::class, 'technicianActiveOrderDetail'])->name('technician-active-order-detail');










Route::put('/update-order-status/{orderId}', [App\Http\Controllers\dashboard\OrderController::class, 'updateStatus'])->name('update-order-status');
Route::put('/update-order-payment-status/{orderId}', [App\Http\Controllers\dashboard\OrderController::class, 'updatePaymentStatus'])->name('update-order-payment-status');
Route::resource('/contacts', ContactController::class);
Route::resource('/track-order', TrackorderController::class);


Route::resource('/instant-price-qoute', QouteController::class);
Route::post('/store-device-in-session', [App\Http\Controllers\website\QouteController::class, 'storeDevice'])->name('store-device-in-session');
Route::post('/store-manufacturer-in-session', [App\Http\Controllers\website\QouteController::class, 'storeManufacturer'])->name('store-manufacturer-in-session');
Route::post('/store-model-in-session', [App\Http\Controllers\website\QouteController::class, 'storeModel'])->name('store-model-in-session');
Route::post('/store-issues-in-session', [App\Http\Controllers\website\QouteController::class, 'storeIssue'])->name('store-issues-in-session');
Route::post('/store-location-in-session', [App\Http\Controllers\website\QouteController::class, 'storeLocation'])->name('store-location-in-session');
Route::get('/store-order-data', [App\Http\Controllers\website\QouteController::class, 'storeOrderData'])->name('store-order-data');
Route::get('/thank-you-page', [App\Http\Controllers\website\QouteController::class, 'thankYou'])->name('thank-you-page');





