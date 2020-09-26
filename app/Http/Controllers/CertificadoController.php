<?php

namespace App\Http\Controllers;

use App\vehiculo;
use App\certificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }

    public function index()
    {
        $certificados = Certificado::latest()->paginate('6');
        return view('certificados.index', compact('certificados'));
    }

    public function create()
    {
        $vehiculos = vehiculo::all();
        return view('certificados.create', compact('vehiculos'));
    }

    public function store(Request $request)
    {
        certificado::create($request->all());
        return redirect()->route('certificados.index');
    }

    public function show(certificado $certificado)
    {
        return view('certificados.show', compact('certificado'));
    }

    public function edit(certificado $certificado)
    {
        $vehiculos = vehiculo::all();
        return view('certificados.edit', compact('certificado', 'vehiculos'));
    }

    public function update(Request $request, $id)
    {
        certificado::find($id)->update($request->all());
        return back()->with('status', 'El certificado fue actualizado con éxito!');
    }

    public function destroy(certificado $certificado)
    {
        $certificado->delete();
        return back()->with('status', 'el certificado fue eliminado con éxito!');
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('searchcertificado');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $certificados = certificado::where('num_certificado', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('certificados.index', compact('certificados'));
    }
}
