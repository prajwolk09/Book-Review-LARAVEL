<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/register', [App\Http\Controllers\AccountController::class, 'register'])
    ->name('account.register');

Route::post('/account/register', [App\Http\Controllers\AccountController::class, 'processRegister'])
    ->name('account.processRegister');

Route::get('/account/login', [App\Http\Controllers\AccountController::class, 'login'])
    ->name('account.login');