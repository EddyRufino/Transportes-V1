<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('datos', 'DatoController');
// Route::get('datos', 'DatoController@index')->name('datos.index');
// Route::get('datos', 'DatoController@create')->name('datos.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
