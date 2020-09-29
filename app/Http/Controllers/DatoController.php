<?php

namespace App\Http\Controllers;

use App\Dato;
use App\Paradero;
use Illuminate\Http\Request;
use App\Http\Requests\DatosResquest;
use Maatwebsite\Excel\Facades\Excel;

class DatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }

    public function index()
    {
        $datos = Dato::latest()->paginate(6);
        return view('datos.index', compact('datos'));
    }

    public function create()
    {
        $paraderos = Paradero::all();
        return view('datos.create', compact('paraderos'))->with('status', 'El usuario fue creado con éxito!');
    }

    public function store(DatosResquest $request)
    {
        // $dato = Dato::create($request->validate());
        $dato = new Dato;
        $dato->nombre = $request->nombre;
        $dato->apellido = $request->apellido;
        $dato->dni = $request->dni;

        if ($request->hasFile('avatar'))
        {
            $dato->avatar = $request->file('avatar')->store('public');
        }

        $dato->paradero_id = $request->paradero_id;

        $dato->save();

        return redirect()->route('datos.index');
    }

    public function show(Dato $dato)
    {
        //
    }

    public function edit(Dato $dato)
    {
        $paraderos = Paradero::all();
        return view('datos.edit', compact('dato', 'paraderos'));
    }

    public function update(Request $request, $id)
    {
        $dato = Dato::findOrfail($id);
        $dato->nombre = $request->nombre;
        $dato->apellido = $request->apellido;
        $dato->dni = $request->dni;

        if ($request->hasFile('avatar'))
        {
            $dato->avatar = $request->file('avatar')->store('public');
        }

        $dato->paradero_id = $request->paradero_id;

        $dato->update();

        return redirect()->route('datos.index');
    }

    public function destroy(Dato $dato)
    {
        $dato->delete();
        return back()->with('status', 'El integrante fue eliminado con éxito!');
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('search');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $datos = Dato::where('dni', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('datos.index', compact('datos'));
    }

    // public function autorizacion()
    // {
    //     $datos = Dato::latest()->paginate(6);
    //     return view('autorizacion.index', compact('datos'));
    // }

    // public function searchAutorizacion(Request $request)
    // {
        
    //     $search = $request->get('searchAutorizacion');
    //     $datos = Dato::where('dni', 'LIKE', '%'.$search.'%')
    //                 ->paginate(6);
    //     return view('autorizacion.index', compact('datos'));
    // }

    public function exportExcel(Dato $dato)
    {
        Excel::create('Integrantes', function($excel) {

            $excel->sheet('Datos', function($sheet) {
                $datos = Dato::select('nombre', 'apellido', 'dni')->get();
                $sheet->fromArray($datos);

            });
        })->export('xls');
    }
}
