@extends('admin.layout')

@section('content')
    <div class="container">
        <form action="{{ route('datos.store') }}" method="post">
            {{ csrf_field() }}


            <div class="form-group">
                <label class="lead text-secondary ">Nombre:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm border-0"
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
                <label class="lead text-secondary">Apellido:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm border-0"
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
                <label class="lead text-secondary">DNI:</label>
                <div class="d-flex justify-content-center align-items-center">
                <input class="form-control col-md-8 bg-light shadow-sm border-0"
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