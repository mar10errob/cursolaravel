<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('crea/fabricantes', function () {
	$nombres = ['Nissan','Ferrari','Toyota','Ford','Renaut'];
	foreach ($nombres as $nombre) {
		$fabricante = new App\Fabricante;
		$fabricante->nombre = $nombre;
		$fabricante->save();
	}
	return "Se han agregado los fabricantes";
});

Route::get('crea/vehiculos', function(){
	$fabricantes = App\Fabricante::count();
	for ($j=1; $j <= $fabricantes ; $j++) {
		for ($i=1; $i <= 5; $i++) {
			$vehiculo = new App\Vehiculo;
			$vehiculo->nombre = "Vehiculo".$i;
			$vehiculo->color = "Verde".$i;
			$vehiculo->automatico = true;
			$vehiculo->fabricante_id = $j;
			$vehiculo->save();
		}
	}
	return "Se han agregado los vehiculos";
});

Route::get('fabricantes/all',[
	'uses' => 'FabricanteController@all',
	'as' => 'fabricantes.all']);

Route::get('fabricantes/show/{id}',[
	'uses' => 'FabricanteController@show',
	'as' => 'fabricantes.show']);

Route::get('fabricantes/{id}/vehiculos',[
	'uses' => 'FabricanteController@vehiculos',
	'as' => 'fabricantes.vehiculos']);

Route::get('fabricantes/create',[
	'uses' => 'FabricanteController@create',
	'as' => 'fabricantes.create']);

Route::post('fabricantes/store',[
	'uses' => 'FabricanteController@store',
	'as' => 'fabricantes.store']);

Route::controller('vehiculos', 'VehiculoController', [
	'getAll' => 'vehiculos.all',
	'getShow' => 'vehiculos.show',
	'getCreate' => 'vehiculos.create']);

Route::get('/', function()
{
	return "Hola Mundo";
});
