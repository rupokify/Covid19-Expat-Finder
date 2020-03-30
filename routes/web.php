<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticController@index')->name('home');
Route::get('/expats-map', 'ExpatController@expatsMap')->name('expats.map');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'AuthController@showLogin')->name('login');
    Route::post('/login', 'AuthController@authenticate');

    Route::get('/register', 'AuthController@showRegister')->name('register');
    Route::post('/register', 'AuthController@createUser');

    Route::get('/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
    Route::post('/resend', 'VerificationController@resend')->name('verification.resend');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

    // access after email is verified
    Route::group(['middleware' => 'verified'], function () {
        Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');

        Route::get('/profile', 'DashboardController@showProfile')->name('profile');
        Route::post('/profile', 'DashboardController@updateProfile')->name('profile');

        Route::get('/verification', 'DashboardController@showVerification')->name('verification');
        Route::post('/verification', 'DashboardController@showVerification');

        Route::get('/reports', 'DashboardController@showReports')->name('reports');

        Route::get('/expats', 'ExpatController@showIndex')->name('expats.index');
        Route::get('/add-expat', 'ExpatController@addExpatForm')->name('expats.create');
        Route::post('/add-expat', 'ExpatController@addExpat');
    });
});
