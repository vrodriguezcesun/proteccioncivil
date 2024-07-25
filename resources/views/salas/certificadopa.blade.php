<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>

    <style>
        body {
            margin-top: 5px;
            /* Ajusta el margen superior según sea necesario */
            margin-right: 5px;
            /* Ajusta el margen derecho según sea necesario */
            margin-bottom: -1px;
            /* Ajusta el margen inferior según sea necesario */
            margin-left: 5px;
            /* Ajusta el margen izquierdo según sea necesario */
            padding: 0;
        }

        .contenedor {
            text-align: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .contenedor img {
            max-width: 100%;
            height: auto;
        }

        /* Estilos para la línea o figura */
        .figura {
            position: absolute;
            top: -10;
            /* Ajusta la posición superior para que esté pegada arriba */
            left: 0;
            /* Ajusta la posición izquierda para que esté pegada a la izquierda */
            max-width: 100%;
            height: auto;
        }

        .figura2 {
            max-width: 50%;
            max-height: 80px;
            /* ajusta según sea necesario */

        }

        .grupocaliente {
            text-align: center;
            color: black;
            font-size: x-large;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .grupocaliente1 {
            text-align: center;
            color: black;
            font-size: x-large;
            font-family: Arial, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        .constancia {
            text-align: center;
            color: dimgray;
            font-size: 55px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .a {
            color: red;
            font-size: 47px;
            text-align: left;
            margin-right: 10px;
            padding: 0 0 0 0;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        h2 {
            font-size: 24px;
        }

        p {
            font-size: 30px;
            text-align: justify;

        }

        .form-control {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            width: 90%;
            margin: 0px;
            color: red;
            border: none;
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0 0 0 0;
            text-align: center;
        }

        .centro {
            
            margin-left: 0px;
            margin-bottom: 0px;
            padding: 0px;

        }

        .letra {
            font-family: Arial, sans-serif;
    font-weight: bold;
    font-size: 50px;
    white-space: nowrap; /* Evita que el texto se divida en múltiples líneas */
    overflow: hidden; /* Oculta el texto que desborda el contenedor */
    text-overflow: ellipsis; /* Muestra puntos suspensivos (...) para indicar texto truncado */
        }

        .centro label,
        .centro input {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            /* Ajusta el margen derecho entre el label y el input según sea necesario */
        }

        .centro p {
            margin-top: 10px;
            /* Ajusta el margen superior entre el input y el párrafo según sea necesario */
            text-align: justify;
            line-height: 1.1;
            /* Ajusta el valor según sea necesario, un valor menor reducirá el espacio entre líneas */
            font-family: Arial, sans-serif;
        }

        .letra {
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        .prueba {
            margin-left: 5px;

        }

        .centrado {
            text-align: center;
            margin: 0;
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 5px;
            /* Margen inferior negativo para acercar el texto más cerca de la línea */

        }

        .centrado1 {
            text-align: center;
            margin: 0;
            font-size: large;
            margin-bottom: -10px;
            /* Reduciendo el margen inferior del párrafo */
        }

        .pie-de-pagina {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .pie-de-pagina img {
            max-width: 100%;
            height: auto;
        }

        .l1 {
            width: 100%;
            height: 35px;
            border-width: 7px 7px 0 0;
            border-style: solid;
            border-color: grey;
            transform: scaleX(-1);
            margin: 0 0 0 0;
            /* Ajusta el margen según sea necesario */
            padding: 5px 0 0 0;
            top: 0px;
            /* Ajusta este valor según sea necesario */
        }

        .l2 {
            position: absolute;
            width: 100%;
            height: 35px;
            border-width: 0 7px 7px 0;
            border-style: solid;
            border-color: red;
            transform: rotate(0deg);
            margin: 0px;
            padding: 0 0 0 0;
            z-index: 0;
            top: 0px;
            /* Ajusta este valor según sea necesario */
        }

        .rotar-imagen {
            max-width: 100%;
            height: auto;
            /* Refleja horizontalmente la imagen */
            transform: scaleX(-1);
        }

        .registro-ssa {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 16px;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="prueba">

        <div class="contenedor">
            <div class="l1">
            <img src="./img/logocaliente2.png" class="rotar-imagen">
           


            </div>

        </div>
        <br>

        <br>

        <div class="grupocaliente">
            Grupo Caliente <br>
            Departamento de Protección Civil
        </div>
        <div class="grupocaliente1">
            Otorga la Presente
        </div>
        <div class="constancia">
            CONSTANCIA
        </div>

        <div class="centro">
            <label class="a">A:</label>
            <input type="text" class="form-control letra" value="{{ $empleado->nombre }}" name="Name">
        </div>
        <div class="centro">
            <p>Por haber participado y acreditado el curso de primeros auxilios, acorde a los programas de capacitación
                incorporados a la Secretaria del Trabajo y Previsión Social y la Secretaria de Salud de B.C. impartido en la Ciudad
                de {{$empleado->ciudadpa}} B.C. el día {{ \Carbon\Carbon::parse($empleado->cursopai)->locale('es_ES')->isoFormat('LL') }}
                .</p>
        </div>
        <br>
        <br>
        <br>
        <div>
            <br>
            <div class="centrado">
                <div style="position: relative;">
                    <!-- <img src="./img/firma2.jpg" style="position: absolute; top: 5%; left: 50%; transform: translate(-50%, -50%);"> -->
                    <p class="centrado letra" style="position: relative; z-index: 1;">Octavio Méndez Stoever</p>
                </div>
            </div>
            <div class="centrado">
                <p class="centrado">Instructor</p>
            </div>
            <div class="centrado">
                <p class="centrado1">Registro STPS: MESO740121RS7-0005</p>
            </div>
            <div class="centrado">
                <p class="centrado1">Registro DEPC: RAPCBC-018</p>
            </div>

            <div class="centrado" style="position: relative;">
                <div class="l2"></div>
                <p class="centrado1 registro-ss">Registro SSA: IPRC0102-16</p>
            </div>
        </div>

    </div>
</body>

</html>