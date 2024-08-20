<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/api/users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('soal2');
});

Route::post('/login', [AuthController::class, 'login']);