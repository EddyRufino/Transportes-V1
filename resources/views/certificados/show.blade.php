@extends('admin.layout')

@section('content')
    <div class="container">
        <h2 class="text-center font-weight-bold lead text-secondary">CERTIFICADO DE INSPECCIÓN TÉCNICA VEHICULAR</h2>
        <div class="form-group text-center">
            <div class="form-group d-flex justify-content-center align-items-center">
                <label class="lead text-secondary">Nª&nbsp;</label>
                <span class="lead">{{ $certificado->num_certificado }}</span>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-start">
              <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Tipo Inspección:&nbsp;</label>
                        <span class="lead">{{ $certificado->tipo_inspeccion }}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Fecha Inspección:&nbsp;</label>
                        <span class="lead">{{ $certificado->fecha_inspeccion }}</span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="lead text-secondary ">Informe Inspección:&nbsp;</label>
                        <span class="lead">{{ $certificado->num_inspeccion }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">Datos del vehículo</div>
            <div class="panel-body">
                <div class="container">
                <div class="row">
                    <div class="column align-items-start col-md-5">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Categoría:</label>
                                {{ $certificado->vehiculo->categoria->nombre }}
                            </p>
                        </div>
                        <div class="col">   
                            <p class="lead">
                                <label class="text-secondary">Marca:</label>
                                {{ $certificado->vehiculo->marca }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Modelo:</label>
                                {{ $certificado->vehiculo->modelo }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Color:</label>
                                {{ $certificado->vehiculo->color }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Motor:</label>
                                {{ $certificado->vehiculo->motor }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Combustible:</label>
                                {{ $certificado->vehiculo->combustible }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Form. Rodante:</label>
                                {{ $certificado->vehiculo->form_rodante }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">VIM:</label>
                                {{ $certificado->vehiculo->vim }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Serie Chasis:</label>
                                {{ $certificado->vehiculo->serie }}
                            </p>
                        </div>
                    </div>
    
                    <div class="column align-items-start col-md-5">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Año Modelo:</label>
                                {{ $certificado->vehiculo->anio_modelo }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Versión:</label>
                                {{ $certificado->vehiculo->version }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Ejes:</label>
                                {{ $certificado->vehiculo->ejes }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Asientos:</label>
                                {{ $certificado->vehiculo->asientos }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Pasajeros:</label>
                                {{ $certificado->vehiculo->pasajeros }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Ruedas:</label>
                                {{ $certificado->vehiculo->ruedas }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Carroceria:</label>
                                {{ $certificado->vehiculo->carroceria }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Potencia:</label>
                                {{ $certificado->vehiculo->potencia }}
                            </p>
                        </div>
                    </div>
    
                    <div class="column align-items-start col-md-2">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Cilindros:</label>
                                {{ $certificado->vehiculo->cilindros }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Cilindrada:</label>
                                {{ $certificado->vehiculo->cilindradas }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">P_Bruto:</label>
                                {{ $certificado->vehiculo->p_bruto }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">P_Neto:</label>
                                {{ $certificado->vehiculo->p_neto }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Carga Util:</label>
                                {{ $certificado->vehiculo->carga_util }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Longitud:</label>
                                {{ $certificado->vehiculo->longitud }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Altura:</label>
                                {{ $certificado->vehiculo->altura }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Ancho:</label>
                                {{ $certificado->vehiculo->ancho }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">Resultado de la inspección vehicular</div>
            <div class="panel-body">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="form-group">
                                <label class="lead text-secondary ">Resultado:</label>
                                <span class="lead">{{ $certificado->resultado }}</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lead text-secondary ">Vigencia:</label>
                                <span class="lead">{{ $certificado->vigencia }}</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="lead text-secondary ">Próxima inspección:</label>
                                <span class="lead">{{ $certificado->proxima_inspeccion }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection