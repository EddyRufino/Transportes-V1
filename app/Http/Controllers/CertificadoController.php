<?php

namespace App\Http\Controllers;

use App\vehiculo;
use App\certificado;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportExcel(Certificado $certificado)
    {
        Excel::create('Certificados', function($excel) {

            $excel->sheet('Datos', function($sheet) {

                // Header
                $sheet->row(1, ['num_certificado', 'tipo_inspeccion', 'fecha_inspeccion', 'num_inspeccion', 'resultado', 'vigencia', 'proxima_inspeccion', 'Placa']);

                // Data
                $certificados = Certificado::all();

                foreach ($certificados as $certificado) {
                    $row = [];
                    $row[0] = $certificado->num_certificado;
                    $row[1] = $certificado->tipo_inspeccion;
                    $row[2] = $certificado->fecha_inspeccion;
                    $row[3] = $certificado->num_inspeccion;
                    $row[4] = $certificado->resultado;
                    $row[5] = $certificado->vigencia;
                    $row[6] = $certificado->proxima_inspeccion;
                    $row[7] = $certificado->vehiculo->placa;
                    $sheet->appendRow($row);
                }

                

            });
        })->export('xls');
    }
}
