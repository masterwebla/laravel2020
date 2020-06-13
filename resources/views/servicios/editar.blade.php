@extends('template')
@section('titulo','Editar Servicio')

@section('contenido')
	<h2 class="text-center">Editar servicio</h2>
	<form action="{{ route('servicios.update',$servicio->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" value="{{$servicio->nombre}}" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="precio">Precio</label>
			<input type="number" name="precio" id="precio" value="{{$servicio->precio}}" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<textarea name="descripcion" id="descripcion" class="form-control">{{$servicio->descripcion}}</textarea>
		</div>
		<div class="form-group">
			<a class="btn btn-danger" href="{{ route('servicios.index') }}">Cancelar</a>
			<button class="btn btn-success">Actualizar <i class="fas fa-save"></i></button>
		</div>

	</form>

@endsection