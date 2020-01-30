<?php

namespace App\Http\Controllers;

use App\Dato;
use Illuminate\Http\Request;

class DatoController extends Controller
{

    public function index()
    {
        $datos = Dato::all();
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Dato $dato)
    {
        //
    }

    public function edit(Dato $dato)
    {
        //
    }

    public function update(Request $request, Dato $dato)
    {
        //
    }

    public function destroy(Dato $dato)
    {
        //
    }
}
