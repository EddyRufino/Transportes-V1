<?php

namespace App\Http\Controllers;

use App\Dato;
use Illuminate\Http\Request;
use App\Http\Requests\DatosResquest;

class DatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Dato::latest()->paginate(6);
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

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('search');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $datos = Dato::where('nombre', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('datos.index', compact('datos'));
    }
}
