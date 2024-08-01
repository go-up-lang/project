<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('board');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/logined', function(Request $request){
    $id = $request->input('id');
    $password = $request->input('pwd');
    return view('logined', ['id' => $id, 'password' => $password]);
});

Route::get('/test', function () {
    return '라우팅이 정상적으로 작동합니다.';
});

