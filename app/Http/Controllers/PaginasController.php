<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class PaginasController extends Controller
{
    public function index(){
    	$nombre = "Pepito";
    	$edad = 12;
    	return view('welcome',compact('nombre','edad'));
    }

    public function nosotros(){
    	return view('nosotros');
    }

    public function productos(){
        $productos = Producto::all(); //SELECT * FROM productos;
    	return view('productos', compact('productos'));
    }

    public function servicios(){
    	return view('servicios');
    }

    public function contactenos(){
    	return view('contactenos');
    }
}
