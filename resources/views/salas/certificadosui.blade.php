<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de la Unidad Interna de Protección Civil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-top: 0px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
            font-weight: normal; /* No bold */
        }

        .header h2 {
            font-size: 20px;
            font-weight: bold;
            margin: 5px 0;
        }

        .subtitulo {
            text-align: left;
            margin-top: 20px;
            margin-left: 150px;
        }

        .subtitulo h2 {
            font-size: 18px;
            margin: 0;
        }

        .subtitulo .bold {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: red;
            color: white;
            font-size: 14px;
        }

        .column-nombre {
            width: 300px;
        }

        .column-puesto {
            width: 140px;
        }

        .small-text {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>4.1 Directorio Unidad Interna de Protección Civil.</h1>
        <h2>DIRECTORIO DE LA UNIDAD INTERNA DE PROTECCION CIVIL</h2>

    </div>
    <div class="subtitulo">
    <h2><span class="bold">Organismo/Institución:</span> {{ $sala->nombre }}</h2>
        <h2>Domilicio: {{ $sala->direccion }}</h2>
        <h2>Telefono: </h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th class="column-nombre">NOMBRE</th>
                <th>PUESTO EN LA UIPC</th>
                <th class="column-puesto">ÁREA DE TRABAJO</th>
                <th>TELÉFONO PERSONAL</th>
                <th>CORREO ELECTRÓNICO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $index => $empleado)
            <tr>
                <td class="small-text">{{ $index + 1 }}</td>
                <td class="small-text">{{ $empleado->nombre }}</td>
                <td class="small-text">{{ $empleado->area_trabajo }}</td>
                <td class="small-text">{{ $empleado->puesto }}</td>
                <td class="small-text">{{ $empleado->telefono }}</td>
                <td class="small-text">{{ $empleado->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>