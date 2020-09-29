@extends('admin.layout')

@section('content')
<div class="container overflow-auto">
    
    <div class="content-header">
      {{-- <h1 class="m-0 text-secondary text-center align-items-center mb-4">Listado de Integrantes</h1> --}}
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-4 text-center">
            <h1 class="m-0 text-secondary text-center align-items-center mb-4">Listado de Integrantes</h1>
          </div>
          <!-- /.col -->
          {{-- <div class="col-sm-4">
            <form class=" ml-3" method="GET" action="{{ route('integrantes.searchrr') }}">
                <div class="input-group input-group-sm">
                  <input required name="searchrr" class="form-control form-control-navbar" type="search" placeholder="Buscar por nombre" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
          </div> --}}

          <div class="  form-group col-md-8">
            <form method="GET" action="{{ route('integrantes.search') }}">
                <div class="col-md-6">
                    <div class="input-group">
                  		<input class="form-control" name="search" type="search" placeholder="Busca un paradero" aria-label="Search">
                        {{-- <select class="form-control select2" name="select" required>
                            <option>Elige</option>
                            @foreach ($paraderos as $paradero)
                                <option value="{{ $paradero->id }}"
                                    >
                                    {{ $paradero->nombre }}
                                </option>
                            @endforeach
                        </select> --}}
                        {{-- <input name="searchrr" class="form-control" placeholder="Buscar por nombre socio"> --}}
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </div>
            </div>

          {{-- <div class="col-sm-4 mt-1">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Integrantes</li>
            </ol>
          </div><!-- /.col --> --}}
        </div>
      </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombres y Apellidos</th>
            <th scope="col">DNI</th>
            <th>Paradero</th>
            {{-- <th>Placa</th> --}}
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        
            @forelse ($integrantes as $integrante)
            <tr>
                <td>{{ $integrante->nombre . " " . $integrante->apellido }}</td>
                <td>{{ $integrante->dni}}</td>
                {{-- <td>{{ $integrante->paradero->nombre }}</td> --}}
                {{-- <td>{{ $integrante->soat->num_poliza }}</td> --}}
                <td>{{ $integrante->nombre_paradero }}</td>
                <td>

                    <a href="{{ route('integrantes.show', $integrante->id) }}" data-toggle="tooltip" data-placement="top" title="Ver más" class="text-success mr-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                          <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </a>

                   {{--  <ul style="list-style: none">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-divider"></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="{{ route('integrantes.show', $integrante->id) }}"
                                >Ver más
                            </a>
                        </li>
                    </ul> --}}
                </td>
            </tr>
            @empty
                <h1 class="text-muted">No hay integrantes para mostrar</h1>
            @endforelse
        
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $integrantes->links() }}
    </div>

</div>
@endsection