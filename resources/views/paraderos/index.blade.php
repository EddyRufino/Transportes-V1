@extends('admin.layout')

@section('content')
<div class="container overflow-auto">
  <div class="box box-primary">
  </div>
    <div class="content-header">
      <div class="container-fluid">
        <p class="m-0 font-weight-bold text-secondary mb-3 text-center"
        >
        Listado de Paraderos

          <a href="{{ route('paraderos.excel') }}" data-toggle="tooltip" data-placement="top" title="Descargar en excel" class="text-primary ml-1">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5 10H3V9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2zm1 0v2h3v-2H6z"/>
              <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
              <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
            </svg>
          </a>
        </p>
        <div class="row ">
          <div class="col-sm-4">
            
            <a class="btn btn-primary inline-block " href="{{ route('paraderos.create') }}">Nuevo Paradero</a>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <form class=" ml-3" method="GET" action="{{ route('paraderos.search') }}">
                <div class="input-group input-group-sm">
                  <input required name="searchparadero" class="form-control form-control-navbar" type="search" placeholder="Buscar por nombre" aria-label="Search">
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
              <li class="breadcrumb-item active">Paraderos</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Presidente</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        
            @forelse ($paraderos as $paradero)
            <tr>
                <td>{{ $paradero->nombre }}</td>
                <td>{{ $paradero->presidente }}</td>
                <td>{{ $paradero->direccion }}</td>
                <td>

                  <a download href="{{ Storage::url($paradero->avatar) }}" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver autorización" class="text-primary mr-2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                      <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                  </a>

                    <a href="{{ route('paraderos.show', $paradero->id) }}" data-toggle="tooltip" data-placement="top" title="Ver más" class="text-success mr-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                          <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </a>

                    <a href="{{ route('paraderos.edit', $paradero) }}" data-toggle="tooltip" data-placement="top" title="Editar" class="text-warning mr-2">
                        <svg width=".9em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>

                          @auth
                            @if (auth()->user()->hasRoles(['admin']))

                              {{-- <a href="{{ route('paraderos.destroy', $paradero) }}" 
                                  onclick="confirm('¿Estás seguro de querer eliminar este paradero?'); event.preventDefault(); ? 
                                    document.getElementById('form-paradero').submit(); : return" data-toggle="tooltip" data-placement="top" title="Eliminar" class="text-danger ">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                              </a> --}}

                            <form id="form-paradero" method="POST" action="{{ route('paraderos.destroy', $paradero) }}"
                                    style="display: inline;">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                              <button class="btn btn-xs p-0 m-0 btn-link"
                                onclick="return confirm('¿Estás seguro? Se borrará todo aquel que pertenezca a este paradero!')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-trash text-danger mb-1 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                              </button>
                            </form>

                            @endif
                          @endauth

                  {{-- <ul style="list-style: none">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="" href="{{ route('paraderos.show', $paradero->id) }}">Ver más</a>
                    <br>
                    <a class="pr-2 pl-2" href="{{ route('paraderos.edit', $paradero) }}">Subir Autorización/Editar</a> <br>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ Storage::url($paradero->avatar) }}" target="_blank">Autorización</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                  @auth
                    @if (auth()->user()->hasRoles(['admin']))
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form method="POST" action="{{ route('paraderos.destroy', $paradero) }}"
                            style="display: inline;">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-danger"
                                onclick="return confirm('Estás seguro de querer eliminar este paradero?')">
                            eliminar
                        </button>
                    </form>
                    @endif
                  @endauth
                  </li>
                </ul> --}}
                </td>
            </tr>
            @empty
                <h1 class="text-muted">No hay paraderos para mostrar</h1>
            @endforelse
        
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $paraderos->links() }}
    </div>

</div>
@endsection