{{-- <strong>Datos del vehículo</strong>
<label>Nombre:</label> <p>{{ $soat->dato->nombre . ' ' . $soat->dato->apellido }}</p>
 <p>{{ $soat->dato->dni }}</p>
 <p>{{ $soat->fin_certificado }}</p>
 <p>{{ $soat->vehiculo->marca }}</p>
 <p>{{ $soat->vehiculo->placa }}</p> --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <title>Document</title>
 </head>
 <body>
    <ul class="list-group col-md-2">
        <li class="list-group-item ">
            <strong>Datos del vehículo</strong>
        </li>
        <li class="list-group-item"><strong>Nombre: </strong>{{ $soat->dato->nombre . ' ' . $soat->dato->apellido }}</li>
{{--         <li class="list-group-item"><strong>DNI: </strong>{{ $soat->dato->dni }}</li> --}}
{{--         <li class="list-group-item"><strong>Expiración: </strong>{{ $soat->fin_certificado }}</li> --}}
{{--         <li class="list-group-item"><strong>Vehículo: </strong>{{ $soat->vehiculo->marca }}</li> --}}

        {{--  --}}
        {{--  --}}
        <li class="list-group-item"><strong>Nº Licencia: </strong>{{ $soat->dato->licencia->num_licencia }}</li>
        <li class="list-group-item"><strong>Nº Identificación vehícular: </strong>{{ $soat->vehiculo->partida_registral }}</li>
        <li class="list-group-item"><strong>Placa: </strong>{{ $soat->vehiculo->placa }}</li>
        {{-- <li class="list-group-item"><strong>Nº Permiso de operación: </strong>????</li> --}}
        <li class="list-group-item"><strong>F. Expedición: </strong>{{ $soat->dato->paradero->fecha_expedicion }}</li>
        <li class="list-group-item"><strong>F. Caducidad: </strong>{{ $soat->dato->paradero->fecha_caducidad }}</li>
        <li class="list-group-item"><strong>Asociación: </strong>{{ $soat->dato->paradero->nombre }}</li>
{{--         <li class="list-group-item"><strong>F. Expedición: </strong>{{ $soat->dato->licencia->fecha_expedicion }}</li> --}}
{{--         <li class="list-group-item"><strong>F. Revalidación: </strong>{{ $soat->dato->licencia->fecha_revalidacion }}</li> --}}
        
        <li class="list-group-item"><strong>Nª Vigencia SOAT: </strong>{{ $soat->fin_certificado }}</li>
{{--         <li class="list-group-item"><strong>Nª Registro vehicular: </strong>????</li>
        <li class="list-group-item"><strong>Nª permiso y F. Vigencia: </strong>????</li> --}}
    </ul>
 </body>
 </html>


