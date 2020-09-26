@extends('admin.layout')

@section('content')
    <div class="container">
        <form action="{{ route('autorizacion.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                {{-- <label class="lead text-secondary mover">ñ:</label> --}}
                <div class="d-flex justify-content-center align-items-center">
                    <select class="form-control select2 col-md-8 " name="dato_id">
                        @foreach ($datos as $dato)
                            <option class="" value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                        @endforeach
    
    
                    </select>
                </div>
                    @if ($errors->has('dato_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dato_id') }}</strong>
                        </span>
                    @endif
            </div>

            <br>
            <div class="form-group">
            <p>
                <label class="lead text-secondary font-weight-bold mover" for="avatar">
                    Autorización:
                    <input type="file" name="avatar">
                </label>
            </p>
            </div>

        </form>   
    </div>
@endsection