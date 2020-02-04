<?php

namespace App\Http\Controllers;

use App\certificado;
use App\vehiculo;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{

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
        //
    }

    public function update(Request $request, certificado $certificado)
    {
        //
    }

    public function destroy(certificado $certificado)
    {
        $certificado->delete();
        return back()->with('status', 'el usuario fue eliminado con éxito!');
    }
}
