<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () { return view('login'); });
Route::post('/logined', [LoginController::class, 'logined']);

Route::get('/signup', function () { return view('signup'); });
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/check-user-id', [UserController::class, 'checkUserId']);


Route::get('/stock', function () { return view('stock'); });