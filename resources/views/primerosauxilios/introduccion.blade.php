@extends('layouts.app',['pagina'=>'introduccion'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1>Introducción a Primeros Auxilios</h1>
        <div class="text-center"> <!-- Centramos el contenido -->
            <div class="embed-responsive embed-responsive-16by9"> <!-- Añadimos la clase para videos responsivos -->
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/introduccion1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="mt-3"> <!-- Añadimos un margen superior -->
                <p>Duración: 1.04 min</p>
                <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
                <!-- Agregar un botón para ir a la próxima vista -->
                <a href="{{ url('primerosauxilios/plan') }}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>

    </main><!-- End #main -->
</div>

@endsection