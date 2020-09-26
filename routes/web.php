<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('datos', 'DatoController', ['except' => ['show']]);
Route::get('/search', 'DatoController@search')->name('datos.search');

Route::resource('licencias', 'LicenciaController');
Route::get('/searchlicencia', 'LicenciaController@search')->name('licencias.search');

Route::resource('vehiculos', 'VehiculoController');
Route::get('/searchvehiculo', 'VehiculoController@search')->name('vehiculos.search');

Route::resource('certificados', 'CertificadoController');
Route::get('/searchcertificados', 'CertificadoController@search')->name('certificados.search');

Route::resource('soats', 'SoatController');
Route::get('/searchsoats', 'SoatController@search')->name('soats.search');

Route::resource('paraderos', 'ParaderoController');
Route::get('/searchparaderos', 'ParaderoController@search')->name('paraderos.search');

Route::resource('autorizaciones', 'AutorizacionController', ['except' => ['update', 'edit']]);
Route::get('/searchAutorizacion', 'AutorizacionController@searchAutorizacion')->name('autorizacion.search');

Route::get('integrantes', 'IntegranteController@index')->name('integrantes.index');
Route::get('integrantes/{integrante}', 'IntegranteController@show')->name('integrantes.show');
Route::get('/searchIntegrantes', 'IntegranteController@search')->name('integrantes.search');
// Route::get('/searchIntegrante', 'IntegranteController@searchrr')->name('integrantes.searchrr');

Route::resource('usuarios', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@contador')->name('home');
