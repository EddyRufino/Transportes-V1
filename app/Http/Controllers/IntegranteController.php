<?php

namespace App\Http\Controllers;

use App\Paradero;
use App\Dato;
use Illuminate\Http\Request;
use DB;
// use App\Http\Controllers\DB;

class IntegranteController extends Controller
{
    public function index(Request $request)
    {
        $integrantes = Dato::Paginate(10);
        $paraderos = Paradero::select('id', 'nombre')->get();
        return view('integrantes.index', compact('integrantes', 'paraderos'));
    }

    public function search(Request $request)
    {
        // $select = $request->get('select');
        $search = $request->get('search');

        // $searchrr = $request->get('searchrr');

        $integrantes = Dato::Join('Paraderos', 'paraderos.id', '=', 'datos.paradero_id')
            ->select('datos.nombre', 'datos.dni', 'paraderos.nombre as nombre_paradero')
            ->where('paraderos.nombre', 'LIKE', '%'.$search.'%')->paginate(10); 
            // Swhere('nombre', 'LIKE', '%'.$search.'%')->paginate(3);

        // AQUI
        // $paraderos = Paradero::select('id', 'nombre')->get();

        // $integrantes = Dato::where('paradero_id', '=', $search)
        //                     ->orWhere('paradero_id', '=', $select)
        //                     // ->orWhere('nombre', 'LIKE', '%'.$searchrr.'%')
        //                     ->paginate(3);

        // $integrantes = Paradero::where('nombre', 'like', '%'. $search.'%')->paginate(3);

        $integrantes->appends(['search' => $search]);
        // $paraderos->appends(['select' => $select]);
        
        return view('integrantes.search', compact('integrantes'));
    }

    // public function searchrr(Request $request)
    // {
    //     $searchrr = $request->get('searchrr');

    //     $paraderos = Paradero::select('id', 'nombre')->get();
    //     // $labelintegrante = Dato::where('nombre', 'LIKE', '%'.$searchrr.'%')
    //     //                         ->paginate(3);
    //     $labelintegrante = Paradero::Join('datos', 'datos.id', '=', 'paraderos.user_id')
    //                         ->select('datos.nombre', 'paraderos.nombre')
    //                         ->where('datos.nombre', 'LIKE', '%'.$searchrr.'%');

    //     return view('integrantes.index', compact('labelintegrante'));
    // }

    public function show(Request $request, $id)
    {
        $integrante = DB::table('datos')->join('soats', 'datos.id', '=', 'soats.dato_id')
                                        ->join('vehiculos', 'vehiculos.id', '=', 'soats.vehiculo_id')
                                        ->join('licencias', 'datos.id', '=', 'licencias.dato_id')
                                        ->join('paraderos', 'paraderos.id', '=', 'datos.paradero_id')
                                ->select('datos.id', 'soats.dato_id', 'datos.nombre', 'datos.apellido', 'datos.dni', 'vehiculos.placa', 'soats.fin_poliza', 'licencias.fecha_revalidacion', 'paraderos.nombre as nombrePara')
                                ->where('datos.id', '=', $id)
                                ->get();

        // return dd($integrante);
        return view('integrantes.show', compact('integrante'));
    }
}
