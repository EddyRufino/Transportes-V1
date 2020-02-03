@extends('admin.layout')

@section('content')
<div class="container overflow-auto">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Listado de Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        
            @forelse ($datos as $dato)
            <tr>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->apellido }}</td>
                <td>{{ $dato->dni }}</td>
                <td>
                    {{-- <a class="" href="{{ route('datos.show', $dato->id) }}">Ver más</a>
                    &nbsp;&nbsp; --}}
                    {{-- <a href="{{ route('dato.edit', $dato) }}">Editar</a> --}}
                    
                    <form method="POST" action="{{ route('datos.destroy', $dato) }}"
                            style="display: inline;">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-danger"
                                onclick="return confirm('Estás seguro de querer eliminar este dato?')">
                            eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @empty
                <h1 class="text-muted">No hay datos para mostrar</h1>
            @endforelse
        
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $datos->links() }}
    </div>

</div>
@endsection