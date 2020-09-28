@extends('admin.layout')

{{-- @section('title',  'Perfil') --}}

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                @endif
            <form class="bg-white shadow rounded py-3 px-4"
                enctype="multipart/form-data"
                action="{{ route('usuarios.update', $user->id) }}" method="post">
                {{ csrf_field() }} {{ method_field('PUT') }}

                <h4 class="text-center text-secondary">Editar Usuario</h4>

                {{-- <img width="100" src="{{ Storage::url($user->avatar) }}" alt=""> --}}

                @include('forms.formUser')

                <div class="form-group">
                    <label class="" for="password">Contraseña</label>
                    <input class="form-control bg-light shadow-sm    "
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Contraseña..."
                                value="{{ old('password') }}">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                        {{-- @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                    </div>

                    {{-- <div class="form-group">
                        <label class="" for="password_confirmation">Confirma contraseña</label>
                        <input class="form-control bg-light shadow-sm     "
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                placeholder="Repite contraseña..."
                                value="{{ old('password') }}"> --}}

                  {{--   @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif --}}
                        {{-- @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                    {{-- </div> --}}

                <button class="btn btn-primary btn-lg btn-block">Actualizar</button>
                <a class="btn btn-outline-secondary btn-block" href="{{route('home')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection