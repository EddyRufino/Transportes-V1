@extends('admin.layout')

@section('content')



    <form action="{{ route('vehiculos.store') }}" method="post">
        {{ csrf_field() }}

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Tarjeta de identificación vehícular
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary ">Zona Registral:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="zona_registral"
                                    required
                                    placeholder="Ingresa la zona_registral..."
                                    value="{{ old('zona_registral') }}">
                            
                                @if ($errors->has('zona_registral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zona_registral') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label class="lead text-secondary ">Oficina Regional:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="oficina_regional"
                                    required
                                    placeholder="Ingresa la oficina_regional..."
                                    value="{{ old('oficina_regional') }}">
                            
                                @if ($errors->has('oficina_regional'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oficina_regional') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Placa:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="placa"
                                    required
                                    placeholder="Ingresa la placa..."
                                    value="{{ old('placa') }}">
                            
                                @if ($errors->has('placa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('placa') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Partida:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="partida_registral"
                                    type="number"
                                    required
                                    placeholder="Ingresa la partida_registral..."
                                    value="{{ old('partida_registral') }}">
                            
                                @if ($errors->has('partida_registral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('partida_registral') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="lead text-secondary ">DUAIDAM:</label>
                            <input class="form-control col-md-10 bg-light shadow-sm "
                                    name="duaidan"
                                    required
                                    placeholder="Ingresa el duaidan..."
                                    value="{{ old('duaidan') }}">
                            
                                @if ($errors->has('duaidan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('duaidan') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Título:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="titulo"
                                    required                                
                                    placeholder="Ingresa el titulo..."
                                    value="{{ old('titulo') }}">
                            
                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Fecha Título:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm  datepicker"
                                        name="fecha_titulo"
                                        id="datepickerv1"
                                        placeholder="Ingresa la fecha Expedicion..."
                                        value="{{ old('fecha_titulo') }}">
                            
                                @if ($errors->has('fecha_titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_titulo') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="lead text-secondary">Condición:</label>
                            <input class="form-control col-md-10 bg-light shadow-sm "
                                    name="condicion"
                                    required
                                    placeholder="Ingresa la condición..."
                                    value="{{ old('condicion') }}">
                                
                                @if ($errors->has('condicion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('condicion') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    </div>
                  </div>
                </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Datos del vehículo
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                                      <div class="container">
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Marca:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="marca"
                                    required
                                    placeholder="Ingresa la marca..."
                                    value="{{ old('marca') }}">
                                
                                @if ($errors->has('marca'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marca') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Color:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="color"
                                    required
                                    placeholder="Ingresa el color..."
                                    value="{{ old('color') }}">
                                
                                @if ($errors->has('color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Modelo:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="modelo"
                                    required
                                    placeholder="Ingresa el modelo..."
                                    value="{{ old('modelo') }}">
                                
                                @if ($errors->has('modelo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('modelo') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Motor:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="motor"
                                    required
                                    placeholder="Ingresa el motor..."
                                    value="{{ old('motor') }}">
                                
                                @if ($errors->has('motor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motor') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Combustible:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="combustible"
                                    required
                                    placeholder="Ingresa el combustible..."
                                    value="{{ old('combustible') }}">
                                
                                @if ($errors->has('combustible'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('combustible') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">VIM:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="vim"
                                    required
                                    placeholder="Ingresa el vim..."
                                    value="{{ old('vim') }}">
                                
                                @if ($errors->has('vim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vim') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Serie Chasis:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="serie"
                                    required
                                    placeholder="Ingresa la serie..."
                                    value="{{ old('serie') }}">
                                
                                @if ($errors->has('serie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serie') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Año Fabrica:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="anio_fabrica"
                                    required
                                    placeholder="Ingresa el año de fabrica..."
                                    value="{{ old('anio_fabrica') }}">
                            
                                @if ($errors->has('anio_fabrica'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anio_fabrica') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Año Modelo:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="anio_modelo"
                                    required
                                    placeholder="Ingresa el año de fabrica..."
                                    value="{{ old('anio_modelo') }}">
                            
                                @if ($errors->has('anio_modelo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anio_modelo') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Versión:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="version"
                                    required
                                    placeholder="Ingresa la versión..."
                                    value="{{ old('version') }}">
                                
                                @if ($errors->has('version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('version') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Ejes:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="ejes"
                                    required
                                    placeholder="Ingresa los ejes..."
                                    value="{{ old('ejes') }}">
                                
                                @if ($errors->has('ejes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ejes') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Asientos:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="asientos"
                                    type="number"
                                    required
                                    placeholder="Ingresa los asientos..."
                                    value="{{ old('asientos') }}">
                                
                                @if ($errors->has('asientos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asientos') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Pasarejos:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="pasajeros"
                                    type="number"
                                    required
                                    placeholder="Ingresa los pasajeros..."
                                    value="{{ old('pasajeros') }}">
                                
                                @if ($errors->has('pasajeros'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pasajeros') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Ruedas:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="ruedas"
                                    type="number"
                                    required
                                    placeholder="Ingresa las ruedas..."
                                    value="{{ old('ruedas') }}">
                                
                                @if ($errors->has('ruedas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ruedas') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Carroceria:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="carroceria"
                                    required
                                    placeholder="Ingresa la carroceria..."
                                    value="{{ old('carroceria') }}">
                                
                                @if ($errors->has('carroceria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('carroceria') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Potencia:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="potencia"
                                    required
                                    placeholder="Ingresa la potencia..."
                                    value="{{ old('potencia') }}">
                                
                                @if ($errors->has('potencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('potencia') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Cilindros:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="cilindros"
                                    required
                                    placeholder="Ingresa los cilindros..."
                                    value="{{ old('cilindros') }}">
                                
                                @if ($errors->has('cilindros'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cilindros') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Cilindradas:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="cilindradas"
                                    required
                                    placeholder="Ingresa las cilindradas..."
                                    value="{{ old('cilindradas') }}">
                                
                                @if ($errors->has('cilindradas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cilindradas') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Peso Bruto:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="p_bruto"
                                    required
                                    placeholder="Ingresa los p_bruto..."
                                    value="{{ old('p_bruto') }}">
                                
                                @if ($errors->has('p_bruto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peso bruto') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Peso Neto:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="p_neto"
                                    required
                                    placeholder="Ingresa las peso neto..."
                                    value="{{ old('p_neto') }}">
                                
                                @if ($errors->has('p_neto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_neto') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Carga Util:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="carga_util"
                                    required
                                    placeholder="Ingresa la carga útil..."
                                    value="{{ old('carga_util') }}">
                                
                                @if ($errors->has('carga_util'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('carga_util') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Longitud:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="longitud"
                                    required
                                    placeholder="Ingresa la longitud..."
                                    value="{{ old('longitud') }}">
                                
                                @if ($errors->has('longitud'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longitud') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Altura:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="altura"
                                    required
                                    placeholder="Ingresa la altura..."
                                    value="{{ old('altura') }}">
                                
                                @if ($errors->has('altura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('altura') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Ancho:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="ancho"
                                    required
                                    placeholder="Ingresa el ancho..."
                                    value="{{ old('ancho') }}">
                                
                                @if ($errors->has('ancho'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ancho') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Form Rodante:</label>
                            <input class="form-control col-md-8 bg-light shadow-sm "
                                    name="form_rodante"
                                    required
                                    placeholder="Ingresa la form_rodante..."
                                    value="{{ old('form_rodante') }}">
                                
                                @if ($errors->has('form_rodante'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('form_rodante') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="lead text-secondary">Categoría:</label><br>
                                <select class="form-control select2 col-md-8 " name="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option class="" value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                
                
                                </select>
                            
                                @if ($errors->has('categoria_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoria_id') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>



                  </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="form-group">
            <div class="d-flex justify-content-center align-items-center">
                <button class="col-md-8 btn btn-primary btn-block">Registrar</button>
                <div></div>
            </div>
        </div>
    </form>
    
@endsection