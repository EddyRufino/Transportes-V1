@extends('admin.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3 class="text-white">{{ $datos->count() }}</h3>
                        <p class="text-white">Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('datos.index') }}" class="small-box-footer">
                        <span class="text-white">Más info</span>
                        <i class="fa fa-arrow-circle-right text-white"></i>
                    </a>
                </div>
            </div>
    
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $licencias->count() }}</h3>
                        <p>Licencias de conducir</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('licencias.index') }}" class="small-box-footer">Más info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>{{ $vehiculos->count() }}</h3>
                    <p>Vehículos</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="{{ route('vehiculos.index') }}" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        @auth
            @if (auth()->user()->hasRoles(['admin', 'recep']))
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>{{ $soats->count() }}</h3>
                    <p>Soats</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{ route('soats.index') }}" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
        @endauth

        </div>
    </div>
    
@endsection