<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [App\Http\Controllers\AboutController::class, 'aboutFunction'])->name('about_page');
});
Route::group(['prefix' => 'services'], function () {
    Route::get('/', [App\Http\Controllers\ServicesController::class, 'servicesFunction'])->name('services_page');
});
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [App\Http\Controllers\ContactController::class, 'contactFunction'])->name('contact_page');
});
