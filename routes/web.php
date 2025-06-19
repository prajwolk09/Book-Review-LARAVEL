<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('register', [App\Http\Controllers\AccountController::class, 'register'])
            ->name('account.register');

        Route::post('register', [App\Http\Controllers\AccountController::class, 'processRegister'])
            ->name('account.processRegister');

        Route::get('login', [App\Http\Controllers\AccountController::class, 'login'])
            ->name('account.login');

        Route::post('login', [App\Http\Controllers\AccountController::class, 'authenticate'])
            ->name('account.authenticate');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('profile', [App\Http\Controllers\AccountController::class, 'profile'])
            ->name('account.profile');
        Route::get('logout', [App\Http\Controllers\AccountController::class, 'logout'])
            ->name('account.logout');
    });
});
