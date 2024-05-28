<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'loginview')->name('login');
    Route::post('/login-post', 'login')->name('login.post');

});
