<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    public function index(){
    	return "ambientesControler";
    }

    public function show(Request $request){
    	return $request->all();
    	//return $request->nombre;
    }
}
