<?php

namespace App\Http\Controllers;

use App\vehiculo;
use App\Categoria;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\VehiculoRequest;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,recep');
    }

    public function index()
    {
        $vehiculos = Vehiculo::latest()->paginate(6);
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('vehiculos.create', compact('categorias'));
    }

    public function store(VehiculoRequest $request)
    {
        // return $request->all();
        vehiculo::create($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function show(vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(vehiculo $vehiculo)
    {
        $categorias = Categoria::all();
        return view('vehiculos.edit', compact('vehiculo', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        vehiculo::find($id)->update($request->all());
        return back()->with('status', 'El vehiculo fue actualizado con éxito!');
    }

    public function destroy(vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return back()->with('status', 'El vehículo fue eliminado con éxito!');
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('searchvehiculo');
        // $juzgados = Juzgado::where('condition', '=', '1')->select('id', 'nombreJuzgado')->get();
        $vehiculos = vehiculo::where('placa', 'LIKE', '%'.$search.'%')
                    ->paginate(6);
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function exportExcel(Vehiculo $vehiculo)
    {
        Excel::create('Vehiculos', function($excel) {
            // Si quieres usar iner join ve LicenciaController o el vídeo de pildoras informaticas https://www.youtube.com/watch?v=s-ZeszfCoEs&list=LLVjaoA9YRI5cKPmiTMcUjSw&index=1&t=479s
            $excel->sheet('Datos', function($sheet) {
                $vehiculos = Vehiculo::select('zona_registral', 'oficina_regional', 'placa', 'partida_registral', 'duaidan', 'titulo', 'fecha_titulo', 'marca', 'vim', 'anio_fabrica', 'anio_modelo')->get();
                $sheet->fromArray($vehiculos);

            });
        })->export('xls');
    }
}
