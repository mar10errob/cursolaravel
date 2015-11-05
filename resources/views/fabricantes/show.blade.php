@extends('layouts.base');
@section('contenido')
	<div class="jumbotron">
		<div class="container">
			<h1>{{ $fabricante->nombre }}</h1>
			<p>{{ $fabricante->count_vehiculos }} Vehículos</p>
		</div>
	</div>
@stop