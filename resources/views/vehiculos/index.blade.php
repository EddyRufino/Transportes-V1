@extends('admin.layout')

@section('content')
    <div class="container overflow-auto">

        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-4">
                  <h1 class="m-0 text-secondary">Listado de Vehículos</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <form class=" ml-3" method="GET" action="{{ route('vehiculos.search') }}">
                        <div class="input-group input-group-sm">
                          <input required name="searchvehiculo" class="form-control form-control-navbar" type="search" placeholder="Buscar por placa" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                  </div>
                <div class="col-sm-4 mt-1">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Vehículos</li>
                  </ol>
                </div><!-- /.col -->
              </div>
            </div>
          </div>

          <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Zona Registral</th>
                <th scope="col">Oficiba Regional</th>
                <th scope="col">Placa</th>
                <th scope="col">Partida</th>
                <th scope="col">Título</th>
                <th scope="col">Fecha Título</th>
                <th scope="col">Categoría</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            
                @forelse ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->zona_registral }}</td>
                    <td>{{ $vehiculo->oficina_regional }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->partida_registral }}</td>
                    <td>{{ $vehiculo->titulo }}</td>
                    <td>{{ $vehiculo->fecha_titulo }}</td>
                    <td>{{ $vehiculo->categoria->nombre }}</td>
                    <td>
                        <ul style="list-style: none">
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                {{-- <span class="dropdown-header">Elige una de ellas</span>
    
                                <div class="dropdown-divider"></div> --}}
                                {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-success" href="#">Editar</a> --}}
    
                                <div class="dropdown-divider"></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-primary" href="{{ route('vehiculos.show', $vehiculo->id) }}"
                                    >Ver más
                                </a>
    
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('vehiculos.destroy', $vehiculo) }}"
                                        style="display: inline;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger"
                                            onclick="return confirm('Estás seguro de querer eliminar este vehiculo?')">
                                        eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
                         
                    </td>
                </tr>
                @empty
                    <h1 class="text-muted">No hay vehículos para mostrar</h1>
                @endforelse
            
            </tbody>
        </table>
    
        <div class="overflow-auto mt-2">
            {{ $vehiculos->links() }}
        </div>

    </div>
@endsection