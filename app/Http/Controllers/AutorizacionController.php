<?php

namespace App\Http\Controllers;

use App\Autorizacion;
use App\Dato;
use Illuminate\Http\Request;

class AutorizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Autorizaciones = Autorizacion::latest()->paginate(6);
        return view('autorizacion.index', compact('autorizaciones'));
    }

    public function create()
    {
        $datos = Dato::all();
        return view('autorizacion.create', compact('datos'));
    }

    public function store(Request $request)
    {
        // $autorizacion = new Autorizacion;
        // $autorizacion->nombre = $request->nombre;
        // // $dato->dni = $request->dni;
        // if ($request->hasFile('avatar'))
        // {
        //     $autorizacion->avatar = $request->file('avatar')->store('public');
        // }
        // $autorizacion->save();

        // return redirect()->route('autorizacion.index');
        return $request->all();
    }

    public function show(Autorizacion $autorizacion)
    {
        //
    }

    public function edit(Autorizacion $autorizacion)
    {
        //
    }

    public function update(Request $request, Autorizacion $autorizacion)
    {
        //
    }

    public function destroy(Autorizacion $autorizacion)
    {
        //
    }

    public function searchAutorizacion(Request $request)
    {
        // $search = $request->get('searchAutorizacion');
        // $datos = Dato::where('dni', 'LIKE', '%'.$search.'%')
        //             ->paginate(6);
        // return view('autorizacion.index', compact('datos'));
    }
}
