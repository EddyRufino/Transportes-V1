<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('datos', 'DatoController', ['except' => ['update', 'edit', 'show']]);
Route::get('/search', 'DatoController@search')->name('datos.search');

Route::resource('licencias', 'LicenciaController', ['except' => ['update', 'edit']]);
Route::get('/searchlicencia', 'LicenciaController@search')->name('licencias.search');

Route::resource('vehiculos', 'VehiculoController', ['except' => ['update', 'edit']]);
Route::get('/searchvehiculo', 'VehiculoController@search')->name('vehiculos.search');

Route::resource('certificados', 'CertificadoController', ['except' => ['update', 'edit']]);
Route::get('/searchcertificados', 'CertificadoController@search')->name('certificados.search');

Route::resource('soats', 'SoatController', ['except' => ['update', 'edit']]);
Route::get('/searchsoats', 'SoatController@search')->name('soats.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@contador')->name('home');
