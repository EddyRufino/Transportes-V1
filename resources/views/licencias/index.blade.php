@extends('admin.layout')

@section('content')
<div class="container overflow-auto">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Listado de Licencias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Licencias</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nº Licencia</th>
            <th scope="col">Clase</th>
            <th scope="col">Expedición</th>
            <th scope="col">Revalidación</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Usuario</th>
            <th scope="col">Categoría</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        
            @forelse ($licencias as $licencia)
            <tr>
                <td>{{ $licencia->num_licencia }}</td>
                <td>{{ $licencia->clase }}</td>
                <td>{{ $licencia->fecha_expedicion }}</td>
                <td>{{ $licencia->fecha_revalidacion }}</td>
                <td>{{ $licencia->domicilio }}</td>
                <td>{{ $licencia->dato->nombre }}</td>
                <td>{{ $licencia->categoria->nombre }}</td>
                <td>
                    <ul style="list-style: none">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            {{-- <span class="dropdown-header">Elige una de ellas</span>

                            <div class="dropdown-divider"></div> --}}
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-success" href="#">Editar</a>

                            <div class="dropdown-divider"></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary" href="{{ route('licencias.show', $licencia->id) }}"
                                >Ver más
                            </a>

                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('licencias.destroy', $licencia) }}"
                                    style="display: inline;">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger"
                                        onclick="return confirm('Estás seguro de querer eliminar este licencia?')">
                                    eliminar
                                </button>
                            </form>
                        </li>
                    </ul>
                     
                </td>
            </tr>
            @empty
                <h1 class="text-muted">No hay licencias para mostrar</h1>
            @endforelse
        
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $licencias->links() }}
    </div>

</div>
@endsection