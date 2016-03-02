<?php

Route::get('/', function () {
    return view("home");
    //return "usando git";
});

Route::post('/form','ambientesController@show');

//controladores
Route::get('/controller','ambientesController@index'); //nombreControlador @ nombreMetodo