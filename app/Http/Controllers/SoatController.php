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
        //
    }

    public function edit(soat $soat)
    {
        //
    }

    public function update(Request $request, soat $soat)
    {
        //
    }

    public function destroy(soat $soat)
    {
        //
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
