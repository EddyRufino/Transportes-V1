<?php

namespace App\Http\Controllers;

use App\soat;
use App\Dato;
use App\vehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\SoatsRequest;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportExcel(Soat $soat)
    {
        Excel::create('Soats', function($excel) {

            $excel->sheet('Datos', function($sheet) {

                // Header
                $sheet->row(1, ['num_poliza', 'uso_vehiculo', 'inicio_poliza', 'fin_poliza', 'fecha_hoy', 'hora_emision', 'monto_prima', 'descripcion', 'Nombre']);

                // Data
                $soats = Soat::all();

                foreach ($soats as $soat) {
                    $row = [];
                    $row[0] = $soat->num_poliza;
                    $row[1] = $soat->uso_vehiculo;
                    $row[2] = $soat->inicio_poliza;
                    $row[3] = $soat->fin_poliza;
                    $row[4] = $soat->fecha_hoy;
                    $row[5] = $soat->hora_emision;
                    $row[6] = $soat->monto_prima;
                    $row[7] = $soat->descripcion;
                    $row[8] = $soat->dato->nombre;
                    $sheet->appendRow($row);
                }
            });
        })->export('xls');
    }
}
