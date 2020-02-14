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
        <li class="list-group-item "><strong>Datos del vehículo</strong></li>
        <li class="list-group-item"><strong>Nombre: </strong>{{ $soat->dato->nombre . ' ' . $soat->dato->apellido }}</li>
        <li class="list-group-item"><strong>DNI: </strong>{{ $soat->dato->dni }}</li>
        <li class="list-group-item"><strong>Expiración: </strong>{{ $soat->fin_certificado }}</li>
        <li class="list-group-item"><strong>Vehículo: </strong>{{ $soat->vehiculo->marca }}</li>
        <li class="list-group-item"><strong>Placa: </strong>{{ $soat->vehiculo->placa }}</li>
    </ul>
 </body>
 </html>


