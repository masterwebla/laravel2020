@extends('template')
@section('titulo','Crear Producto')

@section('contenido')
	<h2 class="text-center">Crear producto</h2>
	<form action="{{ route('productos-guardar') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="precio">Precio</label>
			<input type="number" name="precio" id="precio" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<textarea name="descripcion" id="descripcion" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<a class="btn btn-danger" href="{{ route('productos-listar') }}">Cancelar</a>
			<button class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
		</div>

	</form>

@endsection