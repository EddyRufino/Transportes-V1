@extends('admin.layout')

@section('content')

    <div class="container text-center mt-4">
      <div class="row align-items-start">
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Nª Licencia:</label>
            <p class="lead">{{ $licencia->num_licencia }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Clase:</label>
            <p class="lead">{{ $licencia->clase }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Expedición:</label>
            <p class="lead">{{ $licencia->fecha_expedicion }}</p>
          </div>
        </div>
      </div>

      <div class="row align-items-start">
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Revalidación:</label>
            <p class="lead">{{ $licencia->fecha_revalidacion }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Restricciones:</label>
            <p class="lead">{{ $licencia->restricciones }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Domicilio:</label>
            <p class="lead">{{ $licencia->domicilio }}</p>
          </div>
        </div>
      </div>

      <div class="row align-items-start">
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Tipo Sangre:</label>
            <p class="lead">{{ $licencia->sangre }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Nª Expediente:</label>
            <p class="lead">{{ $licencia->num_expediente }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Nacionalidad:</label>
            <p class="lead">{{ $licencia->nacionalidad }}</p>
          </div>
        </div>
      </div>

      <div class="row align-items-start">
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Nacimiento:</label>
            <p class="lead">{{ $licencia->fecha_nacimiento }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Categoría:</label>
            <p class="lead">{{ $licencia->categoria->nombre }}</p>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label class="text-secondary">Propietario:</label>
            <p class="lead">{{ $licencia->dato->nombre }}</p>
          </div>
        </div>
      </div>

    </div>
@endsection
