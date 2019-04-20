<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('v1')->namespace('API')->group(function () {
    // Login
    Route::post('/login', 'AuthController@postLogin');
    // Register
    Route::post('/register', 'AuthController@postRegister');
    // Protected with APIToken Middleware
    Route::middleware('APIToken')->group(function () {
        // Logout
        Route::post('/logout', 'AuthController@postLogout');
    });
});
