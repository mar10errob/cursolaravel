@extends('layouts.base');
@section('contenido')
	<h1>Crear Vehiculo</h1>
	<form action="{{ route('vehiculos.create') }}" method="POST" role="form">
		{!! csrf_field() !!}
	
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre" name="nombre">
		</div>
		<div class="form-group">
			<label for="">Color</label>
			<input type="text" class="form-control" value="{{ old('color') }}" placeholder="Color" name="color">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="automatico">Automatico
			</label>
		</div>
		<div class="form-group">
			<label for="">Fabricante</label>
			<select class="form-control" name="fabricante">
				@foreach ($fabricantes as $fabricante)
					<option value="{{ $fabricante->id }}">{{ $fabricante->nombre }}</option>
				@endforeach
			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@stop