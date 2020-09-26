@extends('admin.layout')

@section('content')

    <div class="container">
        <form action="{{ route('paraderos.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <h2 class="text-center font-weight-bold lead text-secondary mt-4">Ingresar Datos Paradero</h2>

            <div class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lead text-secondary mover">Fecha Expedición:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="fecha_expedicion"
                                id="datepickerp3"
                                placeholder="Ingresa fecha de expedición..."
                                value="{{ old('fecha_expedicion') }}">
                        </div>
                            @if ($errors->has('fecha_expedicion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_expedicion') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lead text-secondary mover">N. Operación:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="num_operacion"
                                required
                                placeholder="Ingresa el número de operacion..."
                                value="{{ old('num_operacion') }}">
                        </div>
                            @if ($errors->has('número de operacion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_operacion') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="lead text-secondary mover">Fecha Caducidad:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="fecha_caducidad"
                                id="datepickerp4"
                                placeholder="Ingresa fecha caducidad..."
                                value="{{ old('fecha_caducidad') }}">
                        </div>
                            @if ($errors->has('fecha_caducidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_caducidad') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label class="lead text-secondary text-center d-block">Dirección:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="direccion"
                                placeholder="Ingresa el direccion..."
                                value="{{ old('direccion') }}">
                        </div>
                            @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            </div>


            <h2 class="text-center font-weight-bold lead mt-4 pt-4 mb-4 text-secondary">Representantes</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="lead text-secondary mover">Presidente:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="presidente"
                                placeholder="Ingresa nombre presidente..."
                                value="{{ old('presidente') }}">
                        </div>
                            @if ($errors->has('presidente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('presidente') }}</strong>
                                </span>
                            @endif
                    </div>
        
                    <div class="form-group">
                        <label class="lead text-secondary mover">Vice Presidente:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="vicepresidente"
                                placeholder="Ingresa nombre vicepresicente..."
                                value="{{ old('vicepresidente') }}">
                        </div>
                            @if ($errors->has('vicepresidente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vicepresidente') }}</strong>
                                </span>
                            @endif
                    </div>
        
                    <div class="form-group">
                        <label class="lead text-secondary mover">Secretario:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="secretario"
                                placeholder="Ingresa nombre secretario..."
                                value="{{ old('secretario') }}">
                        </div>
                            @if ($errors->has('secretario'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('secretario') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Tesorero:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="tesorero"
                                placeholder="Ingresa nombre tesorero..."
                                value="{{ old('tesorero') }}">
                        </div>
                            @if ($errors->has('tesorero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tesorero') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Inicio Vigencia:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="inicio_vigencia"
                                id="datepickerp1"
                                placeholder="Ingresa inicio vigencia..."
                                value="{{ old('inicio_vigencia') }}">
                        </div>
                            @if ($errors->has('inicio_vigencia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('inicio_vigencia') }}</strong>
                                </span>
                            @endif
                    </div>
    
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="lead text-secondary mover">DNI Presidente:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="dni_presidente"
                                placeholder="Ingresa dni del presidente..."
                                type="number"
                                value="{{ old('dni_presidente') }}">
                        </div>
                            @if ($errors->has('dni_presidente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dni_presidente') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">DNI Vice Presidente:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="dni_vice_presidente"
                                placeholder="Ingresa dni del vice presidente..."
                                type="number"
                                value="{{ old('dni_vice_presidente') }}">
                        </div>
                            @if ($errors->has('dni_vice_presidente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dni_vice_presidente') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">DNI Secretario:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="dni_secretario"
                                placeholder="Ingresa dni del secretario..."
                                type="number"
                                value="{{ old('dni_secretario') }}">
                        </div>
                            @if ($errors->has('dni_secretario'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dni_secretario') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">DNI Tesorero:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="dni_tesorero"
                                placeholder="Ingresa dni del tesorero..."
                                type="number"
                                value="{{ old('dni_tesorero') }}">
                        </div>
                            @if ($errors->has('dni_tesorero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dni_tesorero') }}</strong>
                                </span>
                            @endif
                    </div>
        

        
                    <div class="form-group">
                        <label class="lead text-secondary mover">Fin Vigencia:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="fin_vigencia"
                                id="datepickerp2"
                                placeholder="Ingresa fin vigencia..."
                                value="{{ old('fin_vigencia') }}">
                        </div>
                            @if ($errors->has('fin_vigencia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fin_vigencia') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            </div>


            <br>
            <div class="form-group text-center">
            <p>
                <label class="lead text-secondary font-weight-bold mover" for="avatar">
                    Autorización:
                    <input type="file" name="avatar">
                </label>
            </p>
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