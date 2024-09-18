<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constancia de Competencias o Habilidades Laborales</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;

        }

        .encabezado {
            text-align: center;
        }

        .title {
            font-size: 16px;
            /* Ajusta el tamaño de la fuente según sea necesario */
            font-weight: bold;
            color: #333;
            /* Cambia el color si lo prefieres diferente */
            margin: 0;
            /* Elimina el margen para que los títulos estén pegados */
            padding: 0;
            /* Elimina el padding para eliminar el espacio extra */
            display: block;
            /* Asegura que cada título esté en una fila separada */
        }

        .title+.title {
            margin-top: 5px;
            /* Ajusta el espacio entre los encabezados */
        }


        .section {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .section-title {
            text-align: center;
            background-color: black;
            color: white;
            padding: 5px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 0px;
            /* Espacio debajo del título */
        }

        .data {
            padding: 0px;
            border: 1px solid black;
            /* Borde alrededor de cada sección de datos */
            margin-bottom: 5px;
            border-top: 0px;
            text-align: center;
        }

        .anotar {
            font-size: 10px;
            /* Ajusta el tamaño de la fuente según sea necesario */
            color: #333;
            /* Cambia el color del texto si lo prefieres diferente */
            padding: 0;
            padding-left: 3px;
            margin-bottom: 0 0 0 0px;
            border-top: black 1px solid;
            border-left: black 1px solid;
            border-right: black 1px solid;
            text-align: left;
            /* Alinea el texto a la izquierda */
            vertical-align: top;
            /* Alinea el texto en la parte superior */

        }

        .data2 {
            padding: 0px;
            border: 1px solid black;
            /* Borde alrededor de cada sección de datos */
            border-top: 0px;
            text-align: center;
        }

        .ocupacion {
            font-size: 10px;
            /* Ajusta el tamaño de la fuente según sea necesario */
            color: #333;
            /* Cambia el color del texto si lo prefieres diferente */
            padding: 0;
            /* Elimina el espacio interno para alinear el texto más cerca del borde */
            padding: 0px;

            /* Borde alrededor de cada sección de datos */
            margin-top: 0px;
            border-left: black 1px solid;
            border-right: black 1px solid;
            text-align: right;
            /* Alinea el texto a la izquierda */
            vertical-align: top;
            /* Alinea el texto en la parte superior */
            padding-right: 20px;
        }

        .bordedt {
            padding: 0px;
            border-left: black 1px solid;
            /* Borde alrededor de cada sección de datos */
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            margin-bottom: 5px;
            margin-bottom: 0;
            text-align: center;
        }

        .bordedt1 {
            padding: 0px;
            padding-left: 3px;
            border-left: black 1px solid;
            /* Borde alrededor de cada sección de datos */
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            margin-bottom: 5px;
            margin-bottom: 0;
            text-align: left;
            font-size: 15px;
            width: 55%;

        }

        .curp-separator {
            text-align: left;
            /* Alinea el CURP a la izquierda */
            margin-bottom: 0px;
        }

        .data-name {
            font-size: 10px;
            /* Ajusta el tamaño de la fuente según sea necesario */
            color: #333;
            /* Cambia el color del texto si lo prefieres diferente */
            padding: 0;
            /* Elimina el espacio interno para alinear el texto más cerca del borde */
            margin: 0;
            /* Elimina los márgenes para que quede pegado a la parte superior */
            border: 1px 0 0 0 solid #ddd;
            /* Opcional: Agregar borde si es necesario */
            text-align: left;
            /* Alinea el texto a la izquierda */
            vertical-align: top;
            /* Alinea el texto en la parte superior */
            margin-top: 0px;
        }

        .data-occupation {
            font-size: 12px;
            color: #333;
        }

        .data-position {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            align-items: center;
            background-color: #f9f9f9;
            /* Color de fondo opcional */
        }

        .position-name {
            text-align: center;
            width: 100%;
        }

        .logo {
            width: 100px;
            margin-left: 30px;
        }


        .div1 {

            font-size: 15px;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            border-left: black 1px solid;
            margin-right: 0px;
            padding-left: 10px;
        }

        .puesto {
            margin-left: 30px;
            /* Empuja el puesto hacia la derecha */
            padding-left: 85px;
            /* Opcional: Añade espacio adicional a la izquierda del puesto */
            text-align: right;
            /* Alinea el puesto a la derecha */
            padding-right: 30px;
            font-size: 18px;
        }

        .puesto2 {
            margin-left: 30px;
            /* Empuja el puesto hacia la derecha */
            padding-left: 220px;
            /* Opcional: Añade espacio adicional a la izquierda del puesto */
            text-align: right;
            /* Alinea el puesto a la derecha */
            padding-right: 30px;
            font-size: 16px;
            margin-top: 0px;
        }

        .provision {
            font-size: 12px;
            padding-left: 75px;
            font-weight: bold;
        }


        .anotar2 {
            font-size: 10px;
            color: #333;
            padding-left: 3px;
            margin-top: 0px;
            text-align: left;
            vertical-align: top;
            padding-right: 0px;
        }

        .container {

            background-color: red;
            width: 100%;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 40px;
            display: flex;

            /* Asegura que los items se alineen en la misma fila */

        }

        .separated-span {
            display: inline-block;
            padding-left: 0px;
            padding-right: 8px;
            padding-top: 0px;
            padding-bottom: 0px;

            vertical-align: bottom;
            /* Alinea el texto con la línea vertical */
            font-size: 14px;

        }

        .item1 {
            padding-right: 0px;
            width: 380px;
            /* Ancho fijo para item1 */
            /*  background-color: grey; */
            text-align: center;
            vertical-align: top;
            border-right: black 1px solid;
        }

        .item2 {
            padding-left: 3px;

            width: 335px;
            /* Ancho fijo para item2 */
            /* background-color: green; */
            text-align: left;
            vertical-align: top;
        }

        .table-container {
            width: 100%;
            border-collapse: collapse;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            border-left: black 1px solid;
        }

        .duracion {
            display: flex;
            flex-wrap: wrap;
            height: 40px;
            align-content: space-between;
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;

        }

        .horas {
            width: 80px;
            font-size: 8px;
            text-align: center;
            border-right: black 1px solid;
            height: 37px;
            padding-top: 3px;
            margin-bottom: 10px;

        }

        .horas1 {
            margin-top: 8px;
            font-size: 12px;

        }

        .horas2 {
            margin-top: 0px;
            width: 180px;
            /* Ajusta este valor según tu necesidad */
            text-align: center;
        }

        .contenedor {
            /*          background-color: yellow; */
            width: 723px;
            height: 40px;
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
        }

        .caja1 {
            /*    background-color: #ffaa88; */
            margin-top: 0px;
            margin-bottom: 0px;
            width: 188px;
            height: 40px;
            float: left;
            position: relative;
            /* Para posicionar el contenido de subcaja1 */
            padding-top: 0px;

        }

        .subcaja1 {
            /*   background-color: greenyellow; */
            width: 100%;
            /* Mantén el ancho al 100% para que coincida con caja1 */
            height: 50%;
            /* La mitad de la altura de caja1 */
            font-size: 10px;
            text-align: center;
            position: absolute;
            top: 0;
            /* Coloca la subcaja en la parte superior */
            margin: 0;
            padding-top: 0px;
            /* Ajusta el valor para mover el párrafo más arriba */
            box-sizing: border-box;
            /* Incluye el padding en el ancho total */
            line-height: 5px;
            /* Ajusta este valor para mover el texto verticalmente */

        }

        .subcaja11 {
            /*       background-color: green; */
            width: 100%;
            height: 50%;
            /* La mitad de la altura de caja1 */
            font-size: 12px;
            text-align: center;
            position: absolute;
            bottom: 0;
            /* Coloca la subcaja en la parte inferior */
            margin: 0;
            padding: 0;
            padding-bottom: 5px;
            box-sizing: border-box;
            /* Incluye el padding en el ancho total */
        }

        .caja2 {
            margin-top: 0px;
            /*     background-color: red; */
            width: 110px;
            height: 40px;
            float: left;
            font-size: 11px;
            text-align: center;
            padding-top: 0px;
            line-height: 3px;
            /* Ajusta este valor para mover el texto verticalmente */
            border-left: black 1px solid;
            border-right: black 1px solid;

        }

        .caja2 p span {
            line-height: 1;
            /* Ajusta este valor para reducir el espacio entre las líneas */
        }


        .caja3 {
            margin-top: 0px;
            /*       background-color: green; */
            border-right: black 1px solid;
            width: 100px;
            height: 40px;
            float: left;
            text-align: center;
            font-size: 11px;
        }

        .caja31 {
            margin-top: 0px;
            /*    background-color: red; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 11px;
        }

        .caja32 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .separated-span1 {
            display: inline-block;
            padding-left: 0px;
            padding-right: 8px;
            padding-top: 0px;
            padding-bottom: 0px;
            vertical-align: bottom;
            /* Alinea el texto con la línea vertical */
            font-size: 12px;
            margin-bottom: 0px;
        }


        .caja4 {
            margin-top: 0px;
            /*   background-color: yellow; */
            width: 50px;
            height: 40px;
            float: left;
            border-right: black 1px solid;
        }

        .caja41 {
            margin-top: 0px;
            /*     background-color: red; */
            width: 100%;
            padding-left: 5px;
            height: 20px;
            text-align: left;
            font-size: 11px;
        }

        .caja42 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .caja5 {
            margin-top: 0px;
            /*   background-color: yellow; */
            width: 50px;
            height: 40px;
            float: left;
            border-right: black 1px solid;
        }

        .caja51 {
            margin-top: 0px;
            /*     background-color: red; */
            width: 100%;
            padding-left: 5px;
            height: 20px;
            text-align: left;
            font-size: 11px;
        }

        .caja52 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .caja6 {
            margin-top: 0px;
            /*   background-color: red; */
            width: 25px;
            height: 40px;
            float: left;
            font-size: 10px;
            text-align: center;
            position: relative;
            /* Necesario para la posición absoluta del span */
            border-right: black 1px solid;

        }

        .caja6 span {
            position: absolute;
            bottom: 0;
            /* Alinea el span en la parte inferior del div */
            width: 100%;
            /* Para centrar el texto en el div */
        }


        .caja7 {
            margin-top: 0px;
            /*       background-color: green; */
            border-right: black 1px solid;
            width: 100px;
            height: 40px;
            float: left;
            text-align: center;
            font-size: 11px;
        }

        .caja71 {
            margin-top: 0px;
            /*    background-color: red; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 11px;
        }

        .caja72 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .separated-span2 {
            display: inline-block;
            padding-left: 0px;
            padding-right: 8px;
            padding-top: 0px;
            padding-bottom: 0px;
            vertical-align: bottom;
            /* Alinea el texto con la línea vertical */
            font-size: 12px;
            margin-bottom: 0px;
        }



        .caja8 {
            margin-top: 0px;
            /*   background-color: yellow; */
            width: 50px;
            height: 40px;
            float: left;
            border-right: black 1px solid;
        }

        .caja81 {
            margin-top: 0px;
            /*     background-color: red; */
            width: 100%;
            padding-left: 5px;
            height: 20px;
            text-align: left;
            font-size: 11px;
        }

        .caja82 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }


        .caja9 {
            margin-top: 0px;
            /*   background-color: yellow; */
            width: 50px;
            height: 40px;
            float: left;

        }

        .caja91 {
            margin-top: 0px;
            /*     background-color: red; */
            width: 100%;
            padding-left: 5px;
            height: 20px;
            text-align: left;
            font-size: 11px;
        }

        .caja92 {
            margin-top: 5px;
            /*   background-color: orange; */
            width: 100%;
            height: 20px;
            text-align: center;
            font-size: 12px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        /*////////////////////////Area tematica del curo /////////////////////////////////*/
        .tematica {
            /*    background-color: yellow; */
            width: 723px;
            height: 46px;
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
        }

        .area {
            font-size: 10px;
            /* Ajusta el tamaño de la fuente según sea necesario */
            color: #333;
            /* Cambia el color del texto si lo prefieres diferente */
            padding: 0;
            padding-left: 3px;
            margin-bottom: 0 0 0 0px;
            text-align: left;
            /* Alinea el texto a la izquierda */
            vertical-align: top;
            /* Alinea el texto en la parte superior */

        }

        .areatematica {
            /*  background-color: green; */
            width: 720px;
            font-size: 10px;
            padding-left: 3px;
            color: #333;
            height: 23px;

        }

        .areatematica2 {
            color: red;
            width: 722px;
            height: 23px;
            font-size: 15px;
            text-align: center;
            padding-bottom: 0px;

        }

        .capacitador {

            width: 722px;
            height: 23px;
            font-size: 13px;
            text-align: center;
            padding-bottom: 0px;

        }

        .cajafirmas {
            /*   background-color: yellow; */
            width: 723px;
            height: 170px;
            border-top: black 1px solid;
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            margin-top: 20px;
        }

        .encabezadofirmas {
            /*     background-color: yellow; */
            width: 723px;
            height: 40px;
            text-align: center;
            font-size: 12px;
            display: flex;
            /* Para centrar el texto horizontalmente */
            justify-content: center;
            /* Centra el texto horizontalmente */
            align-items: center;
            /* Centra el texto verticalmente */

        }

        .encabezadofirmas span {
            padding-left: 20px;
            /* Agrega espacio desde el lado izquierdo */
            padding-right: 20px;
            /* Agrega espacio desde el lado derecho */
            margin-top: 10px;
            /* Baja el texto desde la parte superior */
            display: block;
            /* Asegura que el span se comporte como bloque */
            text-align: center;
            /* Opcional, para centrar el texto dentro del span */
        }


        /*////////////////////////Area de Firmas /////////////////////////////////*/

        .firmas {
            /*     background-color: green; */
            width: 723px;
            height: 100px;
        }

        .firma1 {
            /*    background-color: red; */
            width: 241px;
            height: 100px;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;

        }

        .firma-imagen {

            height: 50px;
            /* Ajusta el tamaño del contenedor de la imagen */
        }

        .firma-img {
            max-height: 70px;
            max-width: 150px;
            object-fit: contain;
            /* Mantiene la imagen dentro del espacio */
        }

        .firma-nombre {
            padding: 5px;
        }

        .firma-nombre label {
            text-align: center;
            font-size: 10px;
        }

        .nombre {
            display: block;
            font-size: 12px;
            margin-bottom: 0px;
        }

        .linea {
            border-bottom: 1px solid black;
            margin: 0px 0px;
            /* Ajusta los márgenes para que la línea esté centrada */
        }

        .titulo {
            font-size: 10px;
            margin-top: 5px;
        }

        .firma2 {
            background-color: greenyellow;
            width: 241px;
            height: 100px;
            float: left;
        }

        .firma3 {
            background-color: red;
            width: 241px;
            height: 100px;
            float: left;
        }

        .cajainstrucciones {
            /*   background-color: yellow; */
            width: 723px;
            height: 170px;
            /*  border-top: black 1px solid; */
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
            margin-top: 20px;
        }

        .contenedor-instrucciones {
            width: 100%;
            /* O ajusta el ancho según tu diseño */
            margin-top: 20px;
            padding-left: 5px;
        }

        .encabezado-instrucciones {
            font-size: 14px;
            /* Ajusta el tamaño del encabezado */
            font-weight: bold;
            text-align: left;
        }

        .texto-instrucciones {
            font-size: 9px;
            /* Tamaño de letra más pequeño */
            text-align: left;
            margin-top: 5px;
            /* Espacio entre el encabezado y las instrucciones */
        }

        .texto-instrucciones p {
            margin: 0;
            padding: 2px 0;
        }

        .registroimss {
            /*   background-color: yellow; */
            width: 723px;
            height: 32px;
            border-left: black 1px solid;
            border-right: black 1px solid;
            border-bottom: black 1px solid;
        }

        .rfc {
            width: 360px;
            height: 32px;
            float: left;
            border-right: black 1px solid;
        }
        .rfc2 {
            width: 360px;
            height: 32px;
            float: left;
           
        }


        .registro {
            padding-left: 5px;
            width: 360px;
            height: 15px;
            text-align: left;
            font-size: 10px;
            color: #333;
        }

        .registro1 {

            width: 350px;
            height: 15px;
            text-align: left;
            font-size: 15px;
            color: #333;
            padding-left: 10px;
            text-align: justify;
        }

        .separar {
            margin-left: 5px;
            letter-spacing: 0.7px; /* Aumenta el espacio entre las letras */
            word-spacing: 0.7px; /* Aumenta el espacio entre las barras '|' */
        }
    </style>

</head>

<body>
    <div class="logo">
        <img src="./img/logocaliente2.png" class="rotar-imagen"
            style="width: 120px;">
    </div>
    <div class="encabezado">

        <div class="title">FORMATO DC-3</div>
        <div class="title">CONSTANCIA DE COMPETENCIAS O DE HABILIDADES
            LABORALES</div>
    </div>

    <div class="section">
        <div class="section-title">DATOS DEL TRABAJADOR</div>
        <div class="anotar">
            Nombre (anotar apellido paterno, apellido materno y nombres (s))
        </div>
        <div class="bordedt">
            {{ $empleado->nombre }}
        </div>
        <div class="ocupacion">
            Ocupación específica (Catálogo Nacional de Ocupaciones)
        </div>
        <div class="div1">
            <span class>{{ implode(' | ', str_split($empleado->curp, 1))}}</span>
            <span class="provision">PROVISION DE BIENES Y SERVICIOS</span>

        </div>
        <div class="div1">
            <div class>
                <label class="puestolabel">Puesto</label>
                <span class="puesto2">{{$empleado->puesto}}</span>
            </div>
        </div>

    </div>

    <div class="section">
        <div class="section-title">DATOS DE LA EMPRESA</div>
        <div class="anotar">
            Nombre o razon social (En caso de Persona fisica, anotar apellido paterno, apellido materno y nombre)
        </div>
        <div class="data2">{{$empleado->empresa}}</div>

        <div class="registroimss">
            <div class="rfc">
                <div class="registro">
                    <span>Registro Federal de Contribuyentes con homoclave (SHCP)</span>
                </div>
                <div class="registro1">
                    <span class="separar">{{ implode(' | ', str_split($empleado->rfc, 1))}}</span>
                </div>
            </div>
            <div class="rfc2">
                <div class="registro">
                    <span>Registro Patronal ante el IMSS</span>
                </div>
                <div class="registro1">
                    <span class="separar">{{ implode(' | ', str_split($empleado->imss, 1))}}</span>
                </div>
            </div>
        </div>

        <!--  <table class="table-container">
            <tr>
                <td class="item1">
                    <div class="anotar2">
                        Registro Federal de Contribuyentes con homoclave (SHCP)
                    </div>
                    <span class="separated-span"> </span>
                    <span class="separated-span"> </span>|
                    <span class="separated-span">H</span>|
                    <span class="separated-span">A</span>|
                    <span class="separated-span">C</span>|
                    <span class="separated-span">-</span>|
                    <span class="separated-span">8</span>|
                    <span class="separated-span">6</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">4</span>|
                    <span class="separated-span">-</span>|
                    <span class="separated-span">P</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">6</span>
                </td>
                <td class="item2">
                    <div class="anotar2">
                        Registro Patronal ante el IMSS
                    </div>
                    <span class="separated-span">2</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">0</span>|
                    <span class="separated-span">-</span>|
                    <span class="separated-span">3</span>|
                    <span class="separated-span">8</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">3</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">-</span>|
                    <span class="separated-span">1</span>|
                    <span class="separated-span">0</span>|
                    <span class="separated-span">-</span>|
                    <span class="separated-span">4</span>
                </td>
            </tr>
        </table> -->
    </div>
    <div class=" section">
        <div class="section-title">DATOS DEL PROGRAMA DE CAPACITACION,
            ADIESTRAMIENTO Y PRODUCTIVIDAD</div>
        <div class="anotar">
            Nombre del curso
        </div>
        <div class="bordedt">
        {{$empleado->cursopa}}
        </div>

        <div class="contenedor">
            <div class="caja1">
                <div class="subcaja1">
                    <p>Duracion en horas</p>
                </div>
                <div class="subcaja11">
                    <p>3 HR</p>
                </div>
            </div>
            <div class="caja2">
                <p><span>Periodo de</span><br><span>Ejecución</span></p>
            </div>
            <div class="caja3">
                <div class="caja31"> <span>Año</span></div>
                <div class="caja32">

                    <span class="separated-span1">2</span>|
                    <span class="separated-span1">0</span>|
                    <span class="separated-span1">2</span>|
                    <span class="separated-span1">3</span>
                </div>
            </div>
            <div class="caja4">
                <div class="caja41"> <span>Mes</span></div>
                <div class="caja42">
                    <span class="separated-span1">0</span>|
                    <span class="separated-span1">3</span>
                </div>
            </div>
            <div class="caja5">
                <div class="caja51"> <span>Dia</span></div>
                <div class="caja52">
                    <span class="separated-span1">0</span>|
                    <span class="separated-span1">2</span>
                </div>
            </div>
            <div class="caja6">
                <span>a</span>
            </div>
            <div class="caja7">
                <div class="caja71"> <span>Año</span></div>
                <div class="caja72">

                    <span class="separated-span2">2</span>|
                    <span class="separated-span2">0</span>|
                    <span class="separated-span2">2</span>|
                    <span class="separated-span2">3</span>
                </div>
            </div>
            <div class="caja4">
                <div class="caja41"> <span>Mes</span></div>
                <div class="caja42">
                    <span class="separated-span1">0</span>|
                    <span class="separated-span1">2</span>
                </div>
            </div>
            <div class="caja9">
                <div class="caja91"> <span>Dia</span></div>
                <div class="caja92">
                    <span class="separated-span1">0</span>|
                    <span class="separated-span1">2</span>
                </div>
            </div>

        </div>
        <div class="tematica">
            <div class="areatematica">
                Area tematica del curso 2:
            </div>
            <div class="areatematica2">
                6000 Seguridad
            </div>
        </div>
        <div class="tematica">
            <div class="areatematica">
                Nombre del agente capacitador o STPS 3:
            </div>
            <div class="capacitador">
                OCTAVIO MENDEZ STOEVER
            </div>
        </div>
        <div class="cajafirmas">
            <div class="encabezadofirmas">
                <span>Los datos se asientan en la constancia bajo protesta de decir la verdad apercibidos de la responsabilidad en que incurre todo
                    aquel que se conduce con verdad</span>
            </div>
            <div class="firmas">
                <div class="firma1">
                    <div class="firma-imagen">
                        <img src="./img/firma.jpg" class="firma-img">
                    </div>
                    <div class="firma-nombre">
                        <br>
                        <span class="nombre">OCTAVIO MENDEZ STOEVER</span>
                        <div class="linea"></div>
                        <span class="titulo">Nombre y Firma</span>
                    </div>
                </div>
                <div class="firma1">
                    <div class="firma-imagen">
                        <img src="./img/firma.jpg" class="firma-img">
                    </div>
                    <div class="firma-nombre">
                        <label>Representante de los trabajadores</label>
                        <span class="nombre">LiC. JOSE LUIS RANGEL CORTEZ</span>
                        <div class="linea"></div>
                        <span class="titulo">Nombre y Firma</span>
                    </div>
                </div>
                <div class="firma1">
                    <div class="firma-imagen">
                        <img src="./img/firma.jpg" class="firma-img">
                    </div>
                    <div class="firma-nombre">
                        <label>Representante de los trabajadores</label>
                        <span class="nombre">LiC. MARIO MADRIGAL MAGAÑA</span>
                        <div class="linea"></div>
                        <span class="titulo">Nombre y Firma</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor-instrucciones">
            <div class="encabezado-instrucciones">INSTRUCCIONES</div>
            <div class="texto-instrucciones">
                <p>- Llenar a máquina o con letra de molde.</p>
                <p>- Deberá entregar al trabajador dentro de los veinte días hábiles siguientes al término del curso de capacitación aprobado.</p>
                <p>- 1 Las areas y subareas ocupaciones del Catalogo Nacional de Ocupaciones se encuentran disponibles al reverso de este formato y en la pagina www.stps.gob.mx.</p>
                <p>- 2 Las araes tematicas de los cursos se encuentran diponibles en el reverso de este formato y en la pagina www.stps.gob.mx.</p>
                <p>- 3 Cursos impartidos por el area competente de la Secretaria del Trabajado y Prevision Social.</p>
                <p>- 4 Para empresas con menos de 51 trabajadores, Para empresas con mas de 50 trabajadores firmaria el representante del patron ante la comision mixta de capacitacion, adiestramiento y productividad.</p>
                <p>- 5 Solo para empresas con mas de 50 trabajadores.</p>
                <p>- * Dato no obligatorio.</p>

            </div>
        </div>

    </div>

    </div>
</body>

</html>