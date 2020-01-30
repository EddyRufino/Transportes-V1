<?php

namespace App\Http\Controllers;

use App\Dato;
use Illuminate\Http\Request;
use App\Http\Requests\DatosResquest;

class DatoController extends Controller
{

    public function index()
    {
        $datos = Dato::all();
        return view('datos.index', compact('datos'));
    }

    public function create()
    {
        return view('datos.create');
    }

    public function store(DatosResquest $request)
    {
        // $dato = Dato::create($request->validate());
        $dato = new Dato;
        $dato->nombre = $DatosResquest->nombre;
        $dato->apellido = $DatosResquest->apellido;
        $dato->dni = $DatosResquest->dni;
        $dato->save();

        return redirect()->route('datos.index');
    }

    public function show(Dato $dato)
    {
        //
    }

    public function edit(Dato $dato)
    {
        //
    }

    public function update(Request $request, Dato $dato)
    {
        //
    }

    public function destroy(Dato $dato)
    {
        //
    }
}
