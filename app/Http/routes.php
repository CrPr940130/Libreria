<?php

Route::get('/', function () {
    return view("webside.index");
});

Route::get('/tienda', function () {
    return view("webside.tienda");
});

Route::post('/form','ambientesController@store');

//controladores
Route::get('/controller','ambientesController@index'); //nombreControlador @ nombreMetodo

