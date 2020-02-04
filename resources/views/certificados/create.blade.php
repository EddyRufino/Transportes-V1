@extends('admin.layout')

@section('content')
    <div class="container">
        <h2 class="text-center font-weight-bold lead text-secondary">CERTIFICADO DE INSPECCIÓN TÉCNICA VEHICULAR</h2>
		<form method="POST" action="{{ route('certificados.store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
            <div class="form-group text-center mt-4">
                <div class="form-group d-flex justify-content-center align-items-center">
					<label class="lead text-secondary">Nª&nbsp;</label>
                    <input class="form-control col-md-4 bg-light shadow-sm border-0"
                            name="num_certificado"
                            placeholder="Ingresa el número..."
                            value="{{ old('num_certificado') }}">

                        @if ($errors->has('num_certificado'))
                            <span class="help-block">
                                <strong>{{ $errors->first('num_certificado') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <br>        

            <div class="container">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Tipo Inspección:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0"
                                name="tipo_inspeccion"
                                required
                                placeholder="Ingresa el tipo inspeccion..."
                                value="{{ old('tipo_inspeccion') }}">
                        
                            @if ($errors->has('tipo_inspeccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipo_inspeccion') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Fecha Inspección:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0 datepicker"
                                name="fecha_inspeccion"
                                required
                                id="datepickerv1"
                                placeholder="Ingresa la fecha inspección..."
                                value="{{ old('fecha_inspeccion') }}">
                        
                            @if ($errors->has('fecha_inspeccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_inspeccion') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Informe Inspección:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0"
                                name="num_inspeccion"
                                required
                                placeholder="Ingresa informe de inspección..."
                                value="{{ old('num_inspeccion') }}">
                        
                            @if ($errors->has('num_inspeccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_inspeccion') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                </div>
            </div>

            <div class="container text-center mt-4 ">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="form-group">
                            <label class="lead text-secondary">Vehículo&nbsp;</label>
                            <select class="form-control select2 col-md-8" name="vehiculo_id">
                                @foreach ($vehiculos as $vehiculo)
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                                @endforeach  
                            </select>
                        </div>
                    </div>
                </div>
            </div>
<br>
            <h2 class="mt-4 text-center font-weight-bold lead text-secondary">RESULTADO DE LA INSPECCIÓN TÉCNICA VEHICULAR</h2>
            <br>
            <div class="container">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Resultado:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0"
                                name="resultado"
                                required
                                placeholder="Ingresa el resultado..."
                                value="{{ old('resultado') }}">
                        
                            @if ($errors->has('resultado'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('resultado') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Vigencia:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0 datepicker"
                                name="vigencia"
                                required
                                id="datepickerv1"
                                placeholder="Ingresa la vigencia..."
                                value="{{ old('vigencia') }}">
                        
                            @if ($errors->has('vigencia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vigencia') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Próxima Inspección:</label>
                        <input class="form-control col-md-8 bg-light shadow-sm border-0 datepicker"
                                name="proxima_inspeccion"
                                required
                                id="datepickerv2"
                                placeholder="Ingresa la próxima inspección..."
                                value="{{ old('proxima_inspeccion') }}">
                        
                            @if ($errors->has('proxima_inspeccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('proxima_inspeccion') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                </div>
            </div>
<br>
            <div class="row mt-4">
                <button class="btn btn-primary btn-lg btn-block col-md-11" type="submit">Registrar</button>
            </div>

		</form>
    </div>
@endsection