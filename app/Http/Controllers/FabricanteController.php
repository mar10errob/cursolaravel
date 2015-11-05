<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fabricante;

class FabricanteController extends Controller
{
    public function all()
    {
    	$fabricantes = Fabricante::all();
    	return view('fabricantes.list',['fabricantes' => $fabricantes]);
    }

    public function show($id)
    {
    	$fabricante = Fabricante::find($id);
    	return view('fabricantes.show',['fabricante' => $fabricante]);
    }

    public function vehiculos($id)
    {
    	$fabricante = Fabricante::find($id);
    	$vehiculos = $fabricante->vehiculos;
    	return view('vehiculos.list',['vehiculos'=>$vehiculos]);
    }

    public function create()
    {
        return view('fabricantes.create');
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        $fabricante = new Fabricante;
        $fabricante->nombre = $datos['nombre'];

        if($fabricante->save()){
            return redirect()->route('fabricantes.all');
        }

        return back()->withInput();
    }

}
