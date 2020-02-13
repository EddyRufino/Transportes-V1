@extends('admin.layout')

@section('content')
        <div class="container overflow-auto">

        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-4">
                  <h1 class="m-0 text-secondary">Listado de Certificados</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <form class=" ml-3" method="GET" action="{{ route('certificados.search') }}">
                        <div class="input-group input-group-sm">
                          <input required name="searchcertificado" class="form-control form-control-navbar" type="search" placeholder="Buscar Nª certificado" aria-label="Search">
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
                    <li class="breadcrumb-item active">Certificados</li>
                  </ol>
                </div><!-- /.col -->
              </div>
            </div>
          </div>

          <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nª Certificado</th>
                <th scope="col">Tipo Inspección</th>
                <th scope="col">Fecha Inspección</th>
                <th scope="col">Nª Inspección</th>
                <th scope="col">Resultado</th>
                <th scope="col">Vigencia</th>
                <th scope="col">Próxima Inspección</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            
                @forelse ($certificados as $certificado)
                <tr>
                    <td>{{ $certificado->num_certificado }}</td>
                    <td>{{ $certificado->tipo_inspeccion }}</td>
                    <td>{{ $certificado->fecha_inspeccion }}</td>
                    <td>{{ $certificado->num_inspeccion }}</td>
                    <td>{{ $certificado->resultado }}</td>
                    <td>{{ $certificado->vigencia }}</td>
                    <td>{{ $certificado->proxima_inspeccion }}</td>
                    <td>{{ $certificado->vehiculo->marca }}</td>
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
                                <a class="btn btn-primary" href="{{ route('certificados.show', $certificado->id) }}"
                                    >Ver más
                                </a>
    
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('certificados.destroy', $certificado) }}"
                                        style="display: inline;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger"
                                            onclick="return confirm('Estás seguro de querer eliminar este certificado?')">
                                        eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
                         
                    </td>
                </tr>
                @empty
                    <h1 class="text-muted">No hay certificados para mostrar</h1>
                @endforelse
            
            </tbody>
        </table>
    
        <div class="overflow-auto mt-2">
            {{ $certificados->links() }}
        </div>

    </div>
@endsection