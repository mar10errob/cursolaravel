<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vehiculo;
use App\Fabricante;

class VehiculoController extends Controller
{
	public function getAll()
	{
		$vehiculos = Vehiculo::all();
		return view('vehiculos.list',['vehiculos' => $vehiculos]);
	}

	public function getShow($id)
	{
		$vehiculo = Vehiculo::find($id);
		return view('vehiculos.show',['vehiculo' => $vehiculo]);
	}

	public function getCreate()
	{
		$fabricantes = Fabricante::all();
		return view('vehiculos.create',['fabricantes' => $fabricantes]);
	}

	public function postCreate(Request $request)
	{
		$datos = $request->all();

		$vehiculo = new Vehiculo;
		$vehiculo->nombre = $datos['nombre'];
		$vehiculo->color = $datos['color'];
		if($request->has('automatico')){
			$vehiculo->automatico = true;
		}else{
			$vehiculo->automatico = false;
		}
		$vehiculo->fabricante_id = $datos['fabricante'];

		if($vehiculo->save()){
			return redirect()->route('vehiculos.all');
		}

		return back()->withInput();
	}
}
