@extends('layouts.base');
@section('contenido')
	<div class="jumbotron">
		<div class="container">
			<h1>{{ $vehiculo->nombre }}</h1>
			<p>{{ $vehiculo->color }}</p>
			<p>
				{{ $vehiculo->automatico ? 'Si' : 'No'}}
			</p>
		</div>
	</div>
@stop