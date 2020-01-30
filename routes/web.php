<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::get('admin', function() {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
