@extends('admin.layout')

@section('content')
    <form action="{{ route('licencias.store') }}" method="post">
        {{ csrf_field() }}

        <div class="container">
            <h2 class="text-center font-weight-bold lead text-secondary mt-4">LICENCIA DE CONDUCIR</h2>
            <div class="row mt-4 pt-4">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="lead text-secondary mover">Nª Licencia:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="num_licencia"
                                required
                                placeholder="Ingresa el número de licencia..."
                                value="{{ old('num_licencia') }}">
                        </div>
                            @if ($errors->has('num_licencia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_licencia') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Clase:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="clase"
                                required
                                placeholder="Ingresa la clase..."
                                value="{{ old('clase') }}">
                        </div>
                            @if ($errors->has('clase'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('clase') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Categoría:</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <select class="form-control select2 col-md-8 " name="categoria_id">
                                @foreach ($categorias as $categoria)
                                    <option class="" value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
            
            
                            </select>
                        </div>
                            @if ($errors->has('categoria_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoria_id') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Fecha Expedición:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                    name="fecha_expedicion"
                                    id="datepicker"
                                    placeholder="Ingresa la fecha Expedicion..."
                                    value="{{ old('fecha_expedicion') }}">
                        </div>
                            @if ($errors->has('fecha_expedicion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_expedicion') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Fecha Revalidación:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                    name="fecha_revalidacion"
                                    id="datepicker2"
                                    placeholder="Ingresa la fecha Revalidación..."
                                    value="{{ old('fecha_revalidacion') }}">
                        </div>
                            @if ($errors->has('fecha_revalidacion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_revalidacion') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Integrante:</label>
                        <div class="d-flex justify-content-center align-items-center">
                            <select class="form-control select2 col-md-8" id="select" name="dato_id">
                                @foreach ($usuarios as $dato)
                                    <option class="" value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                                @endforeach
            
            
                            </select>
                        </div>
                            @if ($errors->has('dato_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dato_id') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>

                
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="lead text-secondary mover">Restricciones:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="restricciones"
                                required
                                placeholder="Ingresa las restricciones..."
                                value="{{ old('restricciones') }}">
                        </div>
                            @if ($errors->has('restricciones'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('restricciones') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Domilicio:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="domicilio"
                                required
                                placeholder="Ingresa el domicilio..."
                                value="{{ old('domicilio') }}">
                        </div>
                            @if ($errors->has('domicilio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('domicilio') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Tipo Sangre:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="sangre"
                                required
                                placeholder="Ingresa el tipo de sangre..."
                                value="{{ old('sangre') }}">
                        </div>
                            @if ($errors->has('sangre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sangre') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Nª Expediente:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="num_expediente"
                                placeholder="Ingresa el número de expediente..."
                                value="{{ old('num_expediente') }}">
                        </div>
                            @if ($errors->has('num_expediente'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_expediente') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Nacionalidad:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="nacionalidad"
                                required
                                placeholder="Ingresa la nacionalidad..."
                                value="{{ old('nacionalidad') }}">
                        </div>
                            @if ($errors->has('nacionalidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label class="lead text-secondary mover">Fecha Nacimiento:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                    name="fecha_nacimiento"
                                    id="datepicker3"
                                    placeholder="Ingresa la fecha nacimiento..."
                                    value="{{ old('fecha_nacimiento') }}">
                        </div>
                            @if ($errors->has('fecha_nacimiento'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                </span>
                            @endif
                    </div>

                </div>

        </div>
        <br>
        <div class="form-group">
            <div class="d-flex justify-content-center align-items-center">
                <button class="col-md-8 btn btn-primary btn-block">Registrar</button>
                <div></div>
            </div>
        </div>
        </div>
    </form>
@endsection