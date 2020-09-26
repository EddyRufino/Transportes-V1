@extends('admin.layout')

@section('content')

<div class="container text-center">
    <div class="row align-items-start">
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-secondary">Nombre del paradero:</label>
            <p class="lead">{{ $paradero->nombre }}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-secondary">Fecha Expedición:</label>
            <p class="lead">{{ $paradero->fecha_expedicion }}</p>
          </div>
        </div>
    </div>

    <div class="row align-items-start">
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-secondary">N. Operación:</label>
            <p class="lead">{{ $paradero->num_operacion }}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="text-secondary">Fecha Caducidad:</label>
            <p class="lead">{{ $paradero->fecha_caducidad }}</p>
          </div>
        </div>
    </div>


    <h2 class="text-center font-weight-bold lead mt-4 mb-4 pb-2 text-secondary">Datos de Representantes</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">Nombre del presidente:</label>
                <p class="lead">{{ $paradero->presidente }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">Nombre del vicepresidente:</label>
                <p class="lead">{{ $paradero->vicepresidente }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">Nombre del secretario:</label>
                <p class="lead">{{ $paradero->secretario }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">Nombre del tesorero:</label>
                <p class="lead">{{ $paradero->tesorero }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">Inicio vigencia:</label>
                <p class="lead">{{ $paradero->inicio_vigencia }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-secondary">DNI Presidente:</label>
                <p class="lead">{{ $paradero->dni_presidente }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">DNI Vice Presidente:</label>
                <p class="lead">{{ $paradero->dni_vice_presidente }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">DNI Secretatio:</label>
                <p class="lead">{{ $paradero->dni_secretario }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">DNI tesorero:</label>
                <p class="lead">{{ $paradero->dni_tesorero }}</p>
            </div>
            <div class="form-group">
                <label class="text-secondary">Fin vigencia:</label>
                <p class="lead">{{ $paradero->fin_vigencia }}</p>
            </div>
        </div>
    </div>
    <div class="row align-items-start">
        <div class="col">
            <div class="form-group">
                <label class="text-secondary">Dirección del paradero:</label>
                <p class="lead">{{ $paradero->direccion }}</p>
            </div>
        </div>
    </div>
</div>

@endsection