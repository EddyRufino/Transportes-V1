<?php

namespace App\Http\Controllers;

use App\Paradero;
use App\Dato;
use App\vehiculo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ParaderoRequest;
use Illuminate\Support\Facades\Storage;

class ParaderoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }

    public function index()
    {
        $paraderos = Paradero::latest()->paginate(6); 
        return view('paraderos.index', compact('paraderos'));
    }

    public function create()
    {
        return view('paraderos.create');
    }

    public function store(ParaderoRequest $request)
    {
        $paradero = new Paradero;
        $paradero->nombre = $request->nombre;
        $paradero->num_operacion = $request->num_operacion;
        $paradero->fecha_expedicion = $request->fecha_expedicion;
        $paradero->fecha_caducidad = $request->fecha_caducidad;
        $paradero->direccion = $request->direccion;
        $paradero->presidente = $request->presidente;
        $paradero->dni_presidente = $request->dni_presidente;
        $paradero->vicepresidente = $request->vicepresidente;
        $paradero->dni_vice_presidente = $request->dni_vice_presidente;
        $paradero->secretario = $request->secretario;
        $paradero->dni_secretario = $request->dni_secretario;
        $paradero->tesorero = $request->tesorero;
        $paradero->dni_tesorero = $request->dni_tesorero;
        $paradero->inicio_vigencia = $request->inicio_vigencia;
        $paradero->fin_vigencia = $request->fin_vigencia;
        if ($request->hasFile('avatar'))
        {
            $paradero->avatar = $request->file('avatar')->store('public');
        }
        $paradero->save();

        return redirect()->route('paraderos.index');
    }

    public function show(Paradero $paradero)
    {
        return view('paraderos.show', compact('paradero'));
    }

    public function edit(Paradero $paradero)
    {
        return view('paraderos.edit', compact('paradero'));
    }

    public function update(ParaderoRequest $request, $id)
    {
        $paradero = Paradero::findOrfail($id);
        $paradero->nombre = $request->nombre;
        $paradero->num_operacion = $request->num_operacion;
        $paradero->fecha_expedicion = $request->fecha_expedicion;
        $paradero->fecha_caducidad = $request->fecha_caducidad;
        $paradero->presidente = $request->presidente;
        $paradero->direccion = $request->direccion;
        $paradero->dni_presidente = $request->dni_presidente;
        $paradero->vicepresidente = $request->vicepresidente;
        $paradero->dni_vice_presidente = $request->dni_vice_presidente;
        $paradero->secretario = $request->secretario;
        $paradero->dni_secretario = $request->dni_secretario;
        $paradero->tesorero = $request->tesorero;
        $paradero->dni_tesorero = $request->dni_tesorero;
        $paradero->inicio_vigencia = $request->inicio_vigencia;
        $paradero->fin_vigencia = $request->fin_vigencia;
        // $paradero->avatar = $request->file('avatar')->store('documentos');
        
        if ($request->hasFile('avatar'))
        {
            $paradero->avatar = $request->file('avatar')->store('public');
        }

        // dd($paradero);

        $paradero->update();

        return redirect()->route('paraderos.index');
    }

    public function destroy(Paradero $paradero)
    {
        $paradero->delete();
        return back()->with('status', 'El paradero fue eliminado con éxito!');
    }

    public function search(Request $request)
    {
        $search = $request->get('searchparadero');
        $paraderos = Paradero::where('nombre', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('paraderos.index', compact('paraderos'));
    }

    // ->orWhere('name', 'ss')
    // public function ListIntegrantes(Request $request)
    // {
    //     $paraderos = Paradero::Join('datos', 'datos.id', '=', 'paraderos.user_id')
    //                             ->select('datos.nombre', 'paraderos.nombre')
    //                             ->where('paraderos.nombre', 'LIKE', '%'.$search.'%');

    //     return view('paraderos.index', compact('paraderos'));
    // }

    public function exportExcel(Paradero $paradero)
    {
        Excel::create('Paraderos', function($excel) {

            $excel->sheet('Datos', function($sheet) {
                $paraderos = Paradero::select('nombre', 'num_operacion', 'fecha_caducidad', 'direccion', 'presidente', 'dni_presidente')->get();
                $sheet->fromArray($paraderos);

            });
        })->export('xls');
    }
}
