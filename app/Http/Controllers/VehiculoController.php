<?php

namespace App\Http\Controllers;

use App\vehiculo;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\VehiculoRequest;

class VehiculoController extends Controller
{

    public function index()
    {
        $vehiculos = Vehiculo::latest()->paginate(6);
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('vehiculos.create', compact('categorias'));
    }

    public function store(VehiculoRequest $request)
    {
        // return $request->all();
        vehiculo::create($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function show(vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(vehiculo $vehiculo)
    {
        //
    }

    public function update(Request $request, vehiculo $vehiculo)
    {
        //
    }

    public function destroy(vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return back()->with('status', 'el vehículo fue eliminado con éxito!');
    }
}
