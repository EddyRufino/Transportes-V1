<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('datos', 'DatoController');
Route::resource('licencias', 'LicenciaController');
Route::resource('vehiculos', 'VehiculoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
