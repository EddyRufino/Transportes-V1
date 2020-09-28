@extends('admin.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-start align-items-center">
        <h1 class="display_4 text-secondary mr-2">Usuarios</h1>
        <a class="btn btn-success" href="{{ route('usuarios.create') }}">Nuevo</a>
    </div>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('display_name')->implode(' - ') }}</td>
                    <td>
                        <div class="d-flex">
                            <a  class="btn btn-success"
                                href="{{ route('usuarios.edit', $user->id) }}"
                                >Editar
                            </a>&nbsp;

                        @auth
                            @if (auth()->user()->hasRoles(['admin']))
                                <form method="POST" action="{{ route('usuarios.destroy', $user) }}"
                                        style="display: inline;">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button class="btn btn-danger"
                                            onclick="return confirm('Estás seguro de querer eliminar este usuario?')">
                                        eliminar
                                    </button>
                                </form>
                            @endif
                        @endauth
                        </div>
                    </td>
                </tr>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
            @endforelse
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $users->links() }}
    </div>
</div>

@endsection