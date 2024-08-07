<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/stock', function () {
    return view('stock');
});

Route::post('/logined', function(Request $request){
    $id = $request->input('id');
    $password = $request->input('pwd');
    return view('logined', compact('id', 'password'));
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [UserController::class, 'signup']);