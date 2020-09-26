<?php

namespace App\Http\Controllers;

use App\Dato;
use App\Licencia;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\LicenciaRequest;

class LicenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }

    public function index()
    {
        $licencias = Licencia::latest()->paginate(3);
        return view('licencias.index', compact('licencias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $usuarios = Dato::all();
        return view('licencias.create', compact('categorias', 'usuarios'));
    }

    public function store(LicenciaRequest $request)
    {
        // $licencia = new Licencia;
        // $licencia->num_licencia = $request->num_licencia;
        // $licencia->clase = $request->clase;
        // $licencia->fecha_expedicion = $request->fecha_expedicion;
        // $licencia->fecha_revalidacion = $request->fecha_revalidacion;
        // $licencia->restricciones = $request->restricciones;
        // $licencia->domicilio = $request->domicilio;
        // $licencia->sangre = $request->sangre;
        // $licencia->num_expediente = $request->num_expediente;
        // $licencia->nacionalidad = $request->nacionalidad;
        // $licencia->fecha_nacimiento = $request->fecha_nacimiento;
        // $licencia->categoria_id = $request->categoria_id;
        // $licencia->dato_id = $request->dato_id;
        // $licencia->save();

        Licencia::create($request->all());
        return redirect()->route('licencias.index');        
    }

    public function show(Licencia $licencia)
    {
        return view('licencias.show', compact('licencia'));
    }

    public function edit(Licencia $licencia)
    {
        $categorias = Categoria::all();
        $usuarios = dato::all();
        return view('licencias.edit', compact('licencia', 'categorias', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        Licencia::find($id)->update($request->all());
        return back()->with('status', 'La licencia fue actualizada con éxito!');
    }

    public function destroy(Licencia $licencia)
    {
        $licencia->delete();
        return back()->with('status', 'la licencia fue eliminada con éxito!');
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('searchlicencia');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $licencias = Licencia::where('num_licencia', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('licencias.index', compact('licencias'));
    }
}
