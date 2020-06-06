@extends('template')

@section('titulo','Productos')

@section('contenido')
	<h1>Productos</h1>
	<ul>
		@foreach($productos as $producto)
			<li>{{$producto->nombre}} - ${{$producto->precio}}</li>
		@endforeach
	</ul>
@endsection