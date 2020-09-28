@extends('admin.layout')

@section('content')

<div class="container text-center mt-4">
    <h2 class="text-secondary">Socio de la asosiación de mototaxistas: {{ $integrante[0]->nombrePara }}</h2>
    <br>
    <div class="row align-items-start">
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">Nombre Propietario:</label>
                <p class="lead">{{ $integrante[0]->nombre, '', $integrante[0]->apellido }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">DNI:</label>
                <p class="lead">{{ $integrante[0]->dni }}</p>
            </div>
        </div>
    </div>

    <div class="row text-center align-items-start">
        <div class="col-md-12">
            <div class="form-group">
                <label class="text-secondary">Placa:</label>
                <p class="lead">{{ $integrante[0]->placa }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">Soat:</label>
                <p class="lead">{{ $integrante[0]->fin_poliza }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">Brevete:</label>
                <p class="lead">{{ $integrante[0]->fecha_revalidacion }}</p>
            </div>
        </div>
    </div>
</div>

@endsection