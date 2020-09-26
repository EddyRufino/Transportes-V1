<?php

namespace App\Http\Controllers;

use App\soat;
use App\Dato;
use App\vehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\SoatsRequest;

class SoatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soats = soat::latest()->paginate(6);
        return view('soats.index', compact('soats'));
    }

    public function create()
    {
        $datos = Dato::all();
        $vehiculos = vehiculo::all();
        return view('soats.create', compact('datos', 'vehiculos'));
    }

    public function store(SoatsRequest $request)
    {
        soat::create($request->all());
        return redirect()->route('soats.index');
    }

    public function show(soat $soat)
    {
        return view('soats.show', compact('soat'));
    }

    public function edit(soat $soat)
    {
        $datos = Dato::all();
        $vehiculos = vehiculo::all();
        return view('soats.edit', compact('soat', 'datos', 'vehiculos'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        soat::find($id)->update($request->all());
        return back()->with('status', 'El soat fue actualizado con éxito!');
    }

    public function destroy(soat $soat)
    {
        $soat->delete();
        return back()->with('status', 'El soat fue eliminado con éxito!');
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('searchsoat');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $soats = soat::where('num_poliza', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('soats.index', compact('soats'));
    }
}
