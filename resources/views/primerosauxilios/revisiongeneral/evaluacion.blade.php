@extends('layouts.app',['pagina'=>'evaluacion'])
@section('content')
<div class="container">
    <br>
    <br>
    <main id="main" class="main">
        <h1 class="text-center">Evaluación del Lugar</h1>
        <div class="mt-3"">
                 <p class=" text-center">Duración: 2:13 Seg.</p>
            <p class="justify-text">¡En este curso, aprenderás sobre la importancia de evaluar adecuadamente el lugar de una emergencia y cómo
                realizar esta evaluación de manera efectiva para garantizar la seguridad y la eficiencia en la atención de
                primeros auxilios.. ¡Te deseamos mucho éxito!</p>
        </div>

        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/Evaluaciondellugar.mp4') }}"" type=" video/mp4">
                </video>
            </div>

        </div>
        <br>
        <h2 class="text-center">Formulario de Evaluación</h2>
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
            <input class="btn btn-primary" type="submit" id="enviar" value="Enviar">
        </form>
        <div class="text-center mt-3">
            <a href="{{url('primerosauxilios/revisiongeneral/tecnicas')}}" class="btn btn-primary">Siguiente</a>
        </div>



        <script>
            var player = videojs('miVideo');
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </main>


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