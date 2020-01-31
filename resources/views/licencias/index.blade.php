@extends('admin.layout')

@section('content')
<div class="container">
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
                <td>{{ $licencia->categoria->nombre }}</td>
                <td>{{ $licencia->dato->nombre }}</td>
                <td>
                    {{-- <a class="" href="{{ route('licencias.show', $licencia->id) }}">Ver más</a>
                    &nbsp;&nbsp; --}}
                    {{-- <a href="{{ route('licencia.edit', $licencia) }}">Editar</a> --}}
                    
                    <form method="POST" action="{{ route('licencias.destroy', $licencia) }}"
                            style="display: inline;">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-danger"
                                onclick="return confirm('Estás seguro de querer eliminar este licencia?')">
                            eliminar
                        </button>
                    </form>
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