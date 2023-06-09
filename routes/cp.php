<?php

use Illuminate\Support\Facades\Route;

Route::namespace('\Laborb\StatamicNotificationsChannel\Http\Controllers\Cp')
    ->prefix('notifications/')
    ->name('laborb.notifications.')
    ->group(function () {
    Route::get('/', 'NotificationsController@index')->name('index');
    Route::put('/', 'NotificationsController@update')->name('update');
});