<?php

namespace App\Http\Controllers;

use App\certificado;
use App\Dato;
use App\Licencia;
use App\soat;
use App\vehiculo;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function contador()
    {
        $certificados = certificado::all();
        $datos = Dato::all();
        $licencias = Licencia::all();
        $vehiculos = vehiculo::all();
        $soats = soat::all();
        return view('home', compact('certificados', 'datos', 'licencias', 'vehiculos', 'soats'));
    }
}
