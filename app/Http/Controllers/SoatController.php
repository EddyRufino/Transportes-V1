<?php

namespace App\Http\Controllers;

use App\soat;
use App\Dato;
use App\vehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\SoatsRequest;

class SoatController extends Controller
{
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
}
