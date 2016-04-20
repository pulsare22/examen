<?php


Route::get('/', function () {
    return view('website.index');
});

Route::get('/registrar', function () {
    return view('website.registrar');
});

Route::get('/acceder', function () {
    return view('website.acceder');
});

Route::post('/registrar_usuario', 'UsuarioController@store');

Route::post('/login', 'LoginController@store');

Route::group(['middleware' => ['admin']], function(){
	Route::get('/administrador','AdministradorController@index');
	Route::get('/logout','AdministradorController@logout');
	Route::get('/administrador/mascotas','mascotasController@index');
	Route::post('/registrarmas','mascotasController@store');
	});
