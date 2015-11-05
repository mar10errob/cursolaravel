@extends('layouts.base');
@section('contenido')
	<h1>Crear Fabricante</h1>
	<form action="{{ route('fabricantes.store') }}" method="POST" role="form">
		{!! csrf_field() !!}
	
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre" name="nombre">
		</div>
	
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@stop