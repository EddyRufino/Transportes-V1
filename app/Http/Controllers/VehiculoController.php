<?php

namespace App\Http\Controllers;

use App\vehiculo;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\VehiculoRequest;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('searchvehiculo');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $vehiculos = vehiculo::where('placa', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('vehiculos.index', compact('vehiculos'));
    }
}
