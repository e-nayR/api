<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ItemsController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('index','index');
    Route::get('show/{id}','show');
    Route::get('show/{id}/name','name');
});

Route::controller(ItemsController::class)->group(function () {
    Route::post('new-item', 'store');
    Route::post('menu', 'index');
    Route::post('item/{id}', 'show');
});

