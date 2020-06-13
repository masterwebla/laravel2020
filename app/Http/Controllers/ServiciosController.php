<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServiciosController extends Controller
{
    //Listar servicios
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index',compact('servicios'));
    }

    //Mostrar el formulario para crear
    public function create()
    {
        return view('servicios.crear');
    }

    //Guardar los datos en la Base de Datos
    public function store(Request $request)
    {
        $servicio = Servicio::create([
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'descripcion'=>$request->descripcion
        ]);

        return redirect()->route('servicios.index');
    }

    public function show($id)
    {
        //
    }

    //Mostrar el formulario de edición
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.editar',compact('servicio'));
    }

    //Actualizar el Servicio
    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);
        $servicio->nombre = $request->nombre;
        $servicio->precio = $request->precio;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();

        return redirect()->route('servicios.index');
    }

    //Borrar un Servicio
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();

        return redirect()->route('servicios.index');
    }
}