@extends('admin.layout')

@section('content')
    <div class="container">
        <form action="{{ route('datos.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <h2 class="mt-4 text-center font-weight-bold  text-secondary mb-2 pb-4">Datos del integrante</h2>

            <div class="form-group">
                <label class="lead text-secondary mover">Nombre:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm "
                        name="nombre"
                        required
                        placeholder="Ingresa el nombre..."
                        value="{{ old('nombre') }}">
                </div>
                    @if ($errors->has('nombre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label class="lead text-secondary mover">Apellido:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm "
                        name="apellido"
                        required
                        placeholder="Ingresa el apellido..."
                        value="{{ old('apellido') }}">
                    </div>
                    @if ($errors->has('apellido'))
                        <span class="help-block">
                            <strong>{{ $errors->first('apellido') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label class="lead text-secondary mover">DNI:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm "
                        name="dni"
                        required
                        type="number"
                        placeholder="Ingresa el dni..."
                        value="{{ old('dni') }}">
                    </div>
                    @if ($errors->has('dni'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('dni') }}</strong>
                        </span>
                    @endif
            </div>
{{-- <br> --}}
            {{-- <div class="form-group">
            <p>
                <label class="lead text-secondary font-weight-bold mover" for="avatar">
                    Autorización:
                    <input type="file" name="avatar">
                </label>
            </p>
            </div> --}}
            <div class="form-group">
                <label class="lead text-secondary mover">Paradero:</label>
                <div class="d-flex justify-content-center align-items-center">
                    <select class="form-control select2 col-md-8 " name="paradero_id">
                        @foreach ($paraderos as $paradero)
                            <option class="" value="{{ $paradero->id }}">{{ $paradero->nombre }}</option>
                        @endforeach
    
    
                    </select>
                </div>
                    @if ($errors->has('paradero_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('paradero_id') }}</strong>
                        </span>
                    @endif
            </div>

            <br>
            <div class="form-group">
            	<div class="d-flex justify-content-center align-items-center">
                    <button class="col-md-8 btn btn-primary btn-block">Registrar</button>
                    <div></div>
                </div>
            </div>

        </form>
   
    </div>
    
@endsection