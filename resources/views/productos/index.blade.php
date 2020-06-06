@extends('template')

@section('titulo','Listado de productos')

@section('contenido')
	<section style="padding: 20px">
		<h2 class="text-center">LISTADO DE PRODUCTOS <a class="btn btn-success" href="{{ route('productos-crear') }}"><i class="fas fa-plus"></i></a></h2>
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
				@foreach($productos as $producto)
					<tr>
						<td>{{$producto->nombre}}</td>
						<td>${{$producto->precio}}</td>
						<td>{{$producto->descripcion}}</td>
						<td>							
							<form action="{{ route('productos-borrar',$producto->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<a class="btn btn-info" href="{{ route('productos-editar',$producto->id) }}"><i class="fas fa-edit"></i></a>
								<button class="btn btn-danger" onclick="return confirm('Desea borrar el producto?')"><i class="fas fa-trash"></i></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
@endsection