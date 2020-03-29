<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', 'AuthController@showLogin')->name('login');
    Route::post('/login', 'AuthController@authenticate');

    Route::get('/register', 'AuthController@showRegister')->name('register');
    Route::post('/register', 'AuthController@createUser');
});

Route::group([], function () {
    Route::get('/', 'StaticController@index')->name('index');
    Route::get('/dashboard', 'DashboardController@showDashboard')->name('home');
    Route::get('/profile', 'DashboardController@showProfile')->name('profile');
    Route::get('/verification', 'DashboardController@showVerification')->name('verification');

    Route::get('/reports', 'DashboardController@showReports')->name('reports');

    Route::get('/expats', 'ExpatController@showIndex')->name('expats.index');
    Route::get('/add-expat', 'ExpatController@addExpatForm')->name('expats.create');
    Route::post('/add-expat', 'ExpatController@addExpat');
});
