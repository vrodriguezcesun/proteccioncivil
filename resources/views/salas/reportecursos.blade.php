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

        .subtitulo {
            text-align: left;
            margin-top: 20px;
        }

        .subtitulo h2 {
            font-size: 18px;
            margin: 0;
            margin-left: 200px;

        }



        .header h1 {
            font-size: 18px;
            margin: 0;
        }

        .header h2 {
            font-size: 16px;
            font-weight: bold;
            margin: 5px 0;
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
            /* Fondo rojo para el encabezado */
            color: white;
            /* Texto blanco para el encabezado */
            font-size: 14px;
            /* Tamaño de letra reducido para el encabezado */
        }

        .column-nombre {
            width: 300px;
       
            /* Ajusta el ancho según sea necesario */
        }

        .small-text {
            font-size: 0.8rem;
            /* Ajusta el tamaño según tu necesidad */
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>3.1.1 Relación de personal capacitado</h1>
        <h2>RELACION DE PERSONAL CAPACITADO</h2>

    </div>
    <div class="subtitulo">
        <h2>Organismo/Institucion: {{ $sala->nombre }}</h2>
        <h2>Domilicio: {{ $sala->direccion }}</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2" class="column-nombre">NOMBRE</th>
                <th rowspan="2">PUESTO DENTRO DE LA UIPC</th>
                <!-- Encabezado combinado -->
                <th colspan="4">FECHA DE CAPACITACION</th>
            </tr>
            <tr>

                <th>MANEJO DE EXTINTORES <BR>
                    CURSO DEL PROVEEDOR</th>
                <th>PRIMEROS AUXILIOS</th>
                <th>EVACUACION Y RESGUARDO</th>
                <th>BUSQUEDA Y RESCATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $index => $empleado)
            <tr>
                <td class="small-text">{{ $index + 1 }}</td>
                <td class="small-text">{{ $empleado->nombre }}</td>
                <td class="small-text"></td>
                <td class="small-text">{{ $empleado->cursomyuei ? \Carbon\Carbon::parse($empleado->cursomyuei)->format('d/m/Y') : '' }}</td>
                <td class="small-text">{{ $empleado->cursopai ? \Carbon\Carbon::parse($empleado->cursopai)->format('d/m/Y') : '' }}</td>
                <td class="small-text">{{ $empleado->cursoeyri ? \Carbon\Carbon::parse($empleado->cursoeyri)->format('d/m/Y') : '' }}</td>
                <td class="small-text">{{ $empleado->cursobyri ? \Carbon\Carbon::parse($empleado->cursobyri)->format('d/m/Y') : '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>