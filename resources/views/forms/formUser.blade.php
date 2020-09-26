<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name">Nombre</label>
    <input class="form-control bg-light shadow-sm border-0"
            name="name"
            id="name"
            placeholder="Nombre..."
            value="{{ old('name', $user->name) }}">

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
</div>

<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Correo electronico</label>
    <input class="form-control bg-light shadow-sm border-0"
            type="email"
            name="email"
            id="email"
            placeholder="Email..."
            value="{{ old('email', $user->email) }}">

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
</div>

@auth
    @if (auth()->user()->hasRoles(['admin']))
        <div class="form-group checkbox">
            @foreach ($roles as $id => $name)
                <label>
                    <input type="checkbox"
                        value="{{ $id }}"
                        {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                        name="roles[]">
                    {{ $name }}
                </label>
            @endforeach
        </div>
    @elseif (auth()->user()->hasRoles(['recep']))
            <div class="form-group checkbox d-none">
            @foreach ($roles as $id => $name)
                <label >
                    <input type="checkbox"
                        value="{{ $id }}"
                        {{ $user->roles->pluck('id')->contains($id) ? 'checked' : 'disabled' }}
                        name="roles[]">
                    {{ $name }}
                </label>
            @endforeach
        </div>
    @endif
@endauth