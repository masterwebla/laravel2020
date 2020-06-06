@extends('template')

@section('titulo', 'Bienvenidos')

@section('contenido')
    <h1>Hola mundo</h1>
    <p>Soy {{$nombre}} y tengo {{$edad}} años</p>
    @if($edad>18)
    	<p>Soy mayor de edad</p>
    @else
    	<p>Soy menor de edad</p>
    @endif

    @for ($i = 0; $i < 10; $i++)
    	El numero es {{ $i }} <br>
	@endfor

@endsection