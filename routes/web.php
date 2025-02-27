<?php

use Illuminate\Support\Facades\Artisan;
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
    Route::post('/send-contact-form', [App\Http\Controllers\ContactController::class, 'sendContactForm'])->name('send.contact.form');
});
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');

    return $exitCode;
});
Route::get('/clear-route', function () {
    $exitCode = Artisan::call('route:clear');

    return $exitCode;
});

Route::get('/clear-view', function () {
    $exitCode = Artisan::call('view:clear');

    return $exitCode;
});

Route::get('/clear-laravel-log-file', function () {
    exec('rm -f ' . storage_path('logs/*.log'));
    exec('rm -f ' . base_path('*.log'));

    return 'Log file deleted';
});
