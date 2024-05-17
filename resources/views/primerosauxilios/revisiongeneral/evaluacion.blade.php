@extends('layouts.app',['pagina'=>'evaluacion'])
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        <h1>Evaluacion del Lugar</h1>

        <div class="">
            <div class="">
                <video id="miVideo" class="video-shadow" width="900" height="350" controls>
                    <source src="{{ asset('videos/revisiongeneral/Evaluaciondellugar.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="">
                <p>Duración: 2:13 Min.</p>
                <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
            </div>
        </div>
        <h2>Formulario de Evaluación</h2>
        <form id="evaluacionForm" action="{{ route('evaluaciones.store') }}" method="post">
            @csrf
            <fieldset>
                <legend>Pregunta 1: ¿Qué es lo primero que tienes que hacer en una atención a primeros auxilios?</legend>
                <input type="radio" id="opcion1_1" name="respuesta1" value="Evaluacion de la escena">
                <label for="opcion1_1">Evaluacion de la escena</label><br>

                <input type="radio" id="opcion1_2" name="respuesta1" value="moverlo">
                <label for="opcion1_2">Moverlo</label><br>

                <input type="radio" id="opcion1_3" name="respuesta1" value="Llamar al 911">
                <label for="opcion1_3">Llamar al 911</label><br>

                <legend>Pregunta 2: ¿Qué implica evaluar una escena?</legend>
                <input type="radio" id="opcion2_1" name="respuesta2" value="Analisar los riesgos">
                <label for="opcion2_1">Analisar los riesgos</label><br>

                <input type="radio" id="opcion2_2" name="respuesta2" value="Enfocarme al lesionado">
                <label for="opcion2_2">Enfocarme al lesionado</label><br>

                <input type="radio" id="opcion2_3" name="respuesta2" value="Llamar al 911">
                <label for="opcion2_3">Llamar al 911</label><br>

                <legend>Pregunta 3: ¿Qué preguntas debo hacerme a mí mismo?</legend>
                <input type="radio" id="opcion3_1" name="respuesta3" value="a quien le debo de llamar primero?">
                <label for="opcion3_1">¿A quién le debo de llamar primero?</label><br>

                <input type="radio" id="opcion3_2" name="respuesta3" value="El lugar es seguro para mí?">
                <label for="opcion3_2">¿El lugar es seguro para mí?</label><br>

                <input type="radio" id="opcion3_3" name="respuesta3" value="Llamar al 911">
                <label for="opcion3_3">Llamar al 911</label><br>
            </fieldset>
            <br>
            <input class="btn btn-primary" type="submit" id="enviarlo" value="Enviar">
        </form>

        <a href="{{url('primerosauxilios/revisiongeneral/tecnicas')}}" class="btn btn-primary">Siguiente</a>
    </div>

    <script>
        var player = videojs('miVideo');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</main>

<!-- Agrega el script de SweetAlert al final del cuerpo de la página -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
<div class="center">
    <script>
        Swal.fire({
            position: "center", // Centrar el mensaje en la página
            icon: "success",
            title: "Se ha enviado Correctamente",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
</div>
@endif

<script>
    $(document).ready(function() {
        $('#enviar').click(function(event) {
            event.preventDefault();

            // Verificar si todas las respuestas han sido seleccionadas
            if ($('input[type="radio"]:checked').length === 3) {
                // Si todas las respuestas están seleccionadas, envía el formulario
                $('#evaluacionForm').submit();
            } else {
                // Si no, muestra una alerta con SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Por favor, contesta todas las preguntas antes de enviar el formulario.'
                });
            }
        });
    });
</script>
@endsection