@extends('layouts.base')
@section('contenido')
<h1>Lista de Fabricantes</h1>
<a href="{{ route('fabricantes.create') }}">Crear Fabricante</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fabricantes as $fabricante)
			<tr>
				<td>{{ $fabricante->id }}</td>
				<td>
					<a href="{{ route('fabricantes.show',['id'=>$fabricante->id]) }}">{{ $fabricante->nombre }}</a>
				</td>
				<td>
					<a href="{{ route('fabricantes.vehiculos',['id'=>$fabricante->id]) }}">Ver Vehículos</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop