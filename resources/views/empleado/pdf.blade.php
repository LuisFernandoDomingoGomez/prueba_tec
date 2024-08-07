<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="dist/pdf.css">
</head>
<body>
    <h2 style="color: #000000; font-weight: bold; margin-bottom: 1px;">"Listado de Empleados"</h2><br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>CURP</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                
                <td>{{ $empleado->name }}</td>
                <td>{{ $empleado->empresa->name }}</td>
                <td>{{ $empleado->genero }}</td>
                <td>{{ $empleado->fecha_nac }}</td>
                <td>{{ $empleado->curp }}</td>
                <td>{{ $empleado->telefono }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
