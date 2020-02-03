@extends('admin.layout')

@section('content')
<div class="panel-group">
    <div class="panel panel-info">
        <div class="panel-heading">Tarjeta de identificación vehícular</div>
        <div class="panel-body">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="row col-md-12">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Zona Regional:</label>
                                {{ $vehiculo->zona_registral }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Oficina Regional:</label>
                                {{ $vehiculo->oficina_regional }}
                            </p>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Placa:</label>
                                {{ $vehiculo->placa }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Partida Registral:</label>
                                {{ $vehiculo->partida_registral }}
                            </p>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">DUAIDAM:</label>
                                {{ $vehiculo->duaidan }}
                            </p>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Título:</label>
                                {{ $vehiculo->titulo }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="lead">
                                <label class="text-secondary">Fecha Título:</label>
                                {{ $vehiculo->fecha_titulo }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">Datos del vehículo</div>
        <div class="panel-body">
            <div class="container">
            <div class="row">
                <div class="column align-items-start col-md-4">
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Categoría:</label>
                            {{ $vehiculo->categoria->nombre }}
                        </p>
                    </div>
                    <div class="col">   
                        <p class="lead">
                            <label class="text-secondary">Marca:</label>
                            {{ $vehiculo->marca }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Modelo:</label>
                            {{ $vehiculo->modelo }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Color:</label>
                            {{ $vehiculo->color }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Motor:</label>
                            {{ $vehiculo->motor }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Combustible:</label>
                            {{ $vehiculo->combustible }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Form. Rodante:</label>
                            {{ $vehiculo->form_rodante }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">VIM:</label>
                            {{ $vehiculo->vim }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Serie Chasis:</label>
                            {{ $vehiculo->serie }}
                        </p>
                    </div>
                </div>

                <div class="column align-items-start col-md-4">
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Año Modelo:</label>
                            {{ $vehiculo->anio_modelo }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Versión:</label>
                            {{ $vehiculo->version }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Ejes:</label>
                            {{ $vehiculo->ejes }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Asientos:</label>
                            {{ $vehiculo->asientos }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Pasajeros:</label>
                            {{ $vehiculo->pasajeros }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Ruedas:</label>
                            {{ $vehiculo->ruedas }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Carroceria:</label>
                            {{ $vehiculo->carroceria }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Potencia:</label>
                            {{ $vehiculo->potencia }}
                        </p>
                    </div>
                </div>

                <div class="column align-items-start col-md-4">
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Cilindros:</label>
                            {{ $vehiculo->cilindros }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Cilindrada:</label>
                            {{ $vehiculo->cilindradas }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">P_Bruto:</label>
                            {{ $vehiculo->p_bruto }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">P_Neto:</label>
                            {{ $vehiculo->p_neto }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Carga Util:</label>
                            {{ $vehiculo->carga_util }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Longitud:</label>
                            {{ $vehiculo->longitud }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Altura:</label>
                            {{ $vehiculo->altura }}
                        </p>
                    </div>
                    <div class="col">
                        <p class="lead">
                            <label class="text-secondary">Ancho:</label>
                            {{ $vehiculo->ancho }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection