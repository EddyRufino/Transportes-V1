@extends('admin.layout')

@section('content')
    <div class="container overflow-auto">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-4">
                  <h1 class="m-0 text-secondary">Listado de soats</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <form class=" ml-3" method="GET" action="{{ route('soats.search') }}">
                        <div class="input-group input-group-sm">
                          <input required name="searchsoat" class="form-control form-control-navbar" type="search" placeholder="Buscar Nª poliza" aria-label="Search">
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
                    <li class="breadcrumb-item active">Soats</li>
                  </ol>
                </div><!-- /.col -->
              </div>
            </div>
          </div>

          <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nº Poliza</th>
                <th scope="col">Uso Vehículo</th>
                <th scope="col">Inicio Poliza</th>
                <th scope="col">Fin Poliza</th>
                <th scope="col">Inicio Certi.</th>
                <th scope="col">Fin Certi.</th>
                <th scope="col">Usuario</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            
                @forelse ($soats as $soat)
                <tr>
                    <td>{{ $soat->num_poliza }}</td>
                    <td>{{ $soat->uso_vehiculo }}</td>
                    <td>{{ $soat->inicio_poliza }}</td>
                    <td>{{ $soat->fin_poliza }}</td>
                    <td>{{ $soat->inicio_certificado }}</td>
                    <td>{{ $soat->fin_certificado }}</td>
                    <td>{{ $soat->dato->nombre }}</td>
                    <td>{{ $soat->vehiculo->marca }}</td>
                    <td>
                        <ul style="list-style: none">
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                {{-- <span class="dropdown-header">Elige una de ellas</span>
    
                                <div class="dropdown-divider"></div> --}}
                                {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                {{-- <a class="btn btn-success" href="#">Editar</a> --}}
    
                                <div class="dropdown-divider"></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-primary" href="{{ route('soats.show', $soat->id) }}"
                                    >Ver más
                                </a>
    
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('soats.destroy', $soat) }}"
                                        style="display: inline;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger"
                                            onclick="return confirm('Estás seguro de querer eliminar este soat?')">
                                        eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
                         
                    </td>
                </tr>
                @empty
                    <h1 class="text-muted">No hay soats para mostrar</h1>
                @endforelse
            
            </tbody>
        </table>
    
        <div class="overflow-auto mt-2">
            {{ $soats->links() }}
        </div>

    </div>
@endsection