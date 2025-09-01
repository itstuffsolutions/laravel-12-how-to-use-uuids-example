<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/uuid-test', [DemoController::class ,'index']);
Route::get('/user-form', [UserController::class ,'index']);
Route::post('/user-save', [UserController::class ,'store'])->name('store');
