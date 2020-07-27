<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Turno;

Route::get('/', function () {
    return redirect()->route('turnos.listar');
});

/* Rutas de los Porteros */

Route::get('/dataTable', 'UsuarioController@dataTable')->name('porteros.dataTable');

Route::get('/porteros', 'UsuarioController@index')->name('porteros.listar');

Route::POST('/porteros', 'UsuarioController@store')->name('porteros.crear');

Route::DELETE('/porteros/eliminar/{usuario}', 'UsuarioController@destroy')->name('porteros.eliminar');  

Route::get('/porteros/{usuario}', 'UsuarioController@edit')->name('porteros.editar');

Route::PATCH('/porteros/actualizar/{user}', 'UsuarioController@update')->name('porteros.actualizar');

/* Rutas de los Turnos */

Route::get('/dataTable', 'TurnoController@dataTable')->name('turnos.dataTable');

Route::get('/turnos', 'TurnoController@index')->name('turnos.listar');

Route::POST('/turnos', 'TurnoController@store')->name('turnos.crear');

Route::DELETE('/turnos/eliminar/{turno}', 'TurnoController@destroy')->name('turnos.eliminar');  

Route::get('/turnos/{turno}', 'TurnoController@edit')->name('turnos.editar');

Route::PATCH('/turnos/actualizar/{turno}', 'TurnoController@update')->name('turnos.actualizar');