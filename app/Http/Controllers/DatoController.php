<?php

namespace App\Http\Controllers;

use App\Dato;
use Illuminate\Http\Request;
use App\Http\Requests\DatosResquest;

class DatoController extends Controller
{

    public function index()
    {
        $datos = Dato::latest()->paginate(3);
        return view('datos.index', compact('datos'));
    }

    public function create()
    {
        return view('datos.create')->with('status', 'el usuario fue creado con éxito!');
    }

    public function store(DatosResquest $request)
    {
        // $dato = Dato::create($request->validate());
        $dato = new Dato;
        $dato->nombre = $request->nombre;
        $dato->apellido = $request->apellido;
        $dato->dni = $request->dni;
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
        $dato->delete();
        return back()->with('status', 'el usuario fue eliminado con éxito!');
    }
}
