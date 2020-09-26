@extends('admin.layout')

@section('content')
    <div class="container">
        <form action="{{ route('soats.store') }}" method="post">
            {{ csrf_field() }}
        
        <div class="row">
            <div class="col-sm-6">
                <h5 class="lead text-secondary mover">Información de la póliza</h5>
                <div class="form-group mt-4">
                    <label class="lead text-secondary mover">Nª Poliza:</label>
                    <div class="d-flex justify-content-center align-items-center">
                    <input class="form-control col-md-8 bg-light shadow-sm "
                            name="num_poliza"
                            required
                            placeholder="Ingresa el número de poliza..."
                            value="{{ old('num_poliza') }}">
                    </div>
                        @if ($errors->has('num_poliza'))
                            <span class="help-block">
                                <strong>{{ $errors->first('num_poliza') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="row text-center mt-4 pt-4">
                    <div class="col-lg-6">
                        <h5 class="lead text-secondary">Vigencia de póliza</h5>
                        <div class="form-group text-center mt-4">
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="lead text-secondary">Desde:&nbsp;</label>
                                <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="inicio_poliza"
                                        id="datepickers1"
                                        placeholder="Ingresa la fecha..."
                                        value="{{ old('inicio_poliza') }}">
            
                                    @if ($errors->has('inicio_poliza'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('inicio_poliza') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="lead text-secondary">Hasta:&nbsp;</label>
                                <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="fin_poliza"
                                        id="datepickers2"
                                        placeholder="Ingresa la fecha..."
                                        value="{{ old('fin_poliza') }}">
            
                                    @if ($errors->has('fin_poliza'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fin_poliza') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="lead text-secondary">Vigencia de certificado</h5>
                        <div class="form-group text-center mt-4">
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="lead text-secondary">Desde:&nbsp;</label>
                                <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="inicio_certificado"
                                        id="datepickers3"
                                        placeholder="Ingresa la fecha..."
                                        value="{{ old('inicio_certificado') }}">
            
                                    @if ($errors->has('inicio_certificado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('inicio_certificado') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <label class="lead text-secondary">Hasta:&nbsp;</label>
                                <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="fin_certificado"
                                        id="datepickers4"
                                        placeholder="Ingresa la fecha..."
                                        value="{{ old('fin_certificado') }}">
            
                                    @if ($errors->has('fin_certificado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fin_certificado') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>

                <p class="lead text-center mt-4">Contratante</p>
                <div class="form-group">
                    {{-- <label class="lead text-secondary mover">ñ:</label> --}}
                    <div class="d-flex justify-content-center align-items-center">
                        <select class="form-control select2 col-md-8 " name="dato_id">
                            @foreach ($datos as $dato)
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
                <div class="form-group">
                    <label class="lead text-secondary mover">Teléfono:</label>
                    <div class="d-flex justify-content-center align-items-center">
                    <input class="form-control col-md-8 bg-light shadow-sm "
                            name="telefono"
                            placeholder="Ingresa el teléfono..."
                            value="{{ old('telefono') }}">
                    </div>
                        @if ($errors->has('telefono'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                        @endif
                </div>

            </div>
            <div class="col-sm-6">
                <h5 class="lead text-secondary mover">Datos del vehículo</h5 class="lead">
                    <div class="form-group mt-4 pt-4">
                        <label class="lead text-secondary mover">Uso vehículo:</label>
                        <div class="d-flex justify-content-center align-items-center">
                        <input class="form-control col-md-8 bg-light shadow-sm "
                                name="uso_vehiculo"
                                required
                                placeholder="Ingresa el uso..."
                                value="{{ old('uso_vehiculo') }}">
                        </div>
                            @if ($errors->has('uso_vehiculo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('uso_vehiculo') }}</strong>
                                </span>
                            @endif
                    </div>
                    {{-- <div class="row"> --}}
                        {{-- <div class="col-md-4"> --}}
                            <div class="form-group mt-4">
                                <label class="lead text-secondary mover pt-2">Fecha Hoy:</label>
                                <div class="d-flex justify-content-center align-items-center">
                                <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="fecha_hoy"
                                        id="datepickers5"
                                        required
                                        placeholder="Ingresa la fecha de hoy..."
                                        value="{{ old('fecha_hoy') }}">
                                </div>
                                    @if ($errors->has('fecha_hoy'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fecha_hoy') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        {{-- </div> --}}
                        {{-- <div class="col-md-4"> --}}
                            <div class="form-group mt-4">
                                <label class="lead text-secondary mover pt-2">Hora Emisión:</label>
                                <div class="d-flex justify-content-center align-items-center">
                                <input class="form-control col-md-8 bg-light shadow-sm "
                                        name="hora_emision"
                                        required
                                        placeholder="Ingresa la hora..."
                                        value="{{ old('hora_emision') }}">
                                </div>
                                    @if ($errors->has('hora_emision'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hora_emision') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="col-md-4"> --}}
                            <div class="form-group mt-4">
                                <label class="lead text-secondary mover pt-2">Monto Prima:</label>
                                <div class="d-flex justify-content-center align-items-center">
                                <input class="form-control col-md-8 bg-light shadow-sm "
                                        name="monto_prima"
                                        required
                                        placeholder="Ingresa el monto prima..."
                                        value="{{ old('monto_prima') }}">
                                </div>
                                    @if ($errors->has('monto_prima'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('monto_prima') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label class="lead text-secondary mover">Vehículo:</label>
                                <div class="d-flex justify-content-center align-items-center">
                                    <select class="form-control select2 col-md-8 " name="vehiculo_id">
                                        @foreach ($vehiculos as $vehiculo)
                                            <option class="" value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                                        @endforeach
                    
                    
                                    </select>
                                </div>
                                    @if ($errors->has('vehiculo_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('vehiculo_id') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        {{-- </div> --}}
                    </div>
            </div>
            <div class="form-group mt-4 pt-4">
            	<div class="d-flex justify-content-center align-items-center">
                    <button class="col-md-8 btn btn-primary btn-block">Registrar</button>
                    <div></div>
                </div>
            </div>
          </div>
        </form>
    </div>
@endsection