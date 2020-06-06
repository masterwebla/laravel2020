<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function listar(){
    	$productos = Producto::all();
    	return view('productos.index',compact('productos'));
    }

    public function crear(){
    	return view('productos.crear');
    }

    public function guardar(Request $request){
    	//Validación de datos

    	//Insertar los datos
    	$producto = Producto::create([
    		'nombre'=>$request->nombre,
    		'precio'=>$request->precio,
    		'descripcion'=>$request->descripcion
    	]);

    	return redirect()->route('productos-listar')->with('mensaje','Producto creado correctamente'); 
    }

    public function editar($id){
    	$producto = Producto::find($id); //SELECT * FROM productos WHERE id='$id'
    	return view('productos.editar',compact('producto'));
    }

    public function actualizar(Request $request, $id){
    	//Validacion

    	//Actualizar producto en la BD
    	$producto = Producto::find($id);
    	$producto->nombre = $request->nombre;
    	$producto->precio = $request->precio;
    	$producto->descripcion = $request->descripcion;
    	$producto->save();

    	return redirect()->route('productos-listar')->with('mensaje','Producto actualizado correctamente');
    }

    public function borrar($id){
    	$producto = Producto::find($id);
    	$producto->delete();

    	return redirect()->route('productos-listar')->with('mensaje','Producto borrado correctamente');
    }
}
