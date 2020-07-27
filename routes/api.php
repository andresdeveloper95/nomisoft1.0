<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/turno', function (Request $request) {
    return $request->turno();
});

Route::get('porteros',function(){
	return datatables()
	->eloquent(App\User::query())
	->addColumn('btn','actions')
	->rawColumns(['btn'])	
	->toJson();
});

Route::get('turnos',function(){
	return datatables()
	->eloquent(App\Turno::query())
	->addColumn('btn','actions')
	->rawColumns(['btn'])	
	->toJson();
});
