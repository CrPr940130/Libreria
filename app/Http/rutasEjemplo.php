<?php
require ("../app/Exceptions/Handler.php");

Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo";
});



Route::get('/nombre/{nombre}',function($nombre){
	return "Mi nombre es ".$nombre;

})
->where('nombre', '[A-Za-z]+');


Route::get('/tabla/{num}',function($num){
	for($i=0;$i<=10;$i++)
		echo $i." x ".$num."= ".$i*$num."<br/>";

})
->where('nombre', '[0-9]+');


Route::get('/condicion/{edad}',function($edad){
	if($edad<18)
		return "no puedes fumar";
	else
		return "adelante, fuma";

})
->where('nombre', '[0-9]+');


Route::get('/envio-parametros',function(){
	$parametro="Ambientes de Programacion";
	return view('ambientes',compact('parametro'));
});