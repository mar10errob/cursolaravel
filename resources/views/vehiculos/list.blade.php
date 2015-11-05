@extends('layouts.base')
@section('contenido')
<h1>Lista de Vehículos</h1>
<a href="{{ route('vehiculos.create') }}">Crear Vehículo</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Color</th>
				<th>Automatico</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($vehiculos as $vehiculo)
			<tr>
				<td>{{ $vehiculo->id }}</td>
				<td><a href="{{ route('vehiculos.show',['id' => $vehiculo->id]) }}">{{ $vehiculo->nombre }}</a></td>
				<td>{{ $vehiculo->color }}</td>
				@if ($vehiculo->automatico)
				<td>Si</td>	
				@else
				<td>No</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
@stop