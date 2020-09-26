@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                {{-- @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                @endif --}}
                    <form class="bg-white shadow rounded py-3 px-4"
                            enctype="multipart/form-data"
                            action="{{ route('usuarios.store') }}" method="post">
                            {{ csrf_field() }}
                        <h4 class="display-4">Crear usuario</h4>

                        @include('forms.formUser')

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>
                            <input class="form-control bg-light shadow-sm border-0 "
                                        type="password"
                                        name="password"
                                        id="password"
                                        placeholder="Contraseña..."
                                        value="{{ old('password', $user->password) }}">
                                    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Repite Contraseña</label>
                                <input class="form-control bg-light shadow-sm border-0 "
                                        type="password"
                                        name="password_confirmation"
                                        id="password_confirmation"
                                        placeholder="Repita su contraseña..."
                                        value="{{ old('password', $user->password) }}">

                                {{-- @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
{{-- 
                            <div class="form-group">
                                <label for="email">DNI</label>
                                <input class="form-control bg-light shadow-sm @error('dni') is-invalid @else border-0 @enderror"
                                        name="dni"
                                        placeholder="Ingrese DNI..."
                                        value="{{ old('dni', $user->dni) }}">
                            
                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                        <button class="btn btn-primary btn-lg btn-block">Crear</button>
                    </form>
            </div>
        </div>
    </div>
@endsection