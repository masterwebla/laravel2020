@extends('template')
@section('titulo','Listado de Servicios')

@section('contenido')
	
	<div class="container">
		<h1 class="text-center">Listado de Servicios <a class="btn btn-success" href="{{ route('servicios.create') }}"><i class="fas fa-plus"></i></a></h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Descripcion</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($servicios as $servicio)
					<tr>
						<td>{{$servicio->nombre}}</td>
						<td>${{$servicio->precio}}</td>
						<td>{{$servicio->descripcion}}</td>
						<td>							
							<form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<a class="btn btn-warning" href="{{ route('servicios.edit',$servicio->id) }}"><i class="fas fa-edit"></i></a>
								<button class="btn btn-danger" onclick="return confirm('Desea borrar el servicio?')"><i class="fas fa-trash"></i></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection