<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('datos', 'DatoController');
Route::get('/search', 'DatoController@search')->name('datos.search');

Route::resource('licencias', 'LicenciaController');
Route::get('/searchlicencia', 'LicenciaController@search')->name('licencias.search');

Route::resource('vehiculos', 'VehiculoController');
Route::get('/searchvehiculo', 'VehiculoController@search')->name('vehiculos.search');

Route::resource('certificados', 'CertificadoController');
Route::get('/searchcertificados', 'CertificadoController@search')->name('certificados.search');

Route::resource('soats', 'SoatController');
Route::get('/searchsoats', 'SoatController@search')->name('soats.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@contador')->name('home');
