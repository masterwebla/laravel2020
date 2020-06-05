<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
    	$nombre = "Pepito";
    	$edad = 25;
    	return view('welcome',compact('nombre','edad'));
    }

    public function nosotros(){
    	return view('nosotros');
    }

    public function productos(){
    	return view('productos');
    }

    public function servicios(){
    	return view('servicios');
    }

    public function contactenos(){
    	return view('contactenos');
    }
}
