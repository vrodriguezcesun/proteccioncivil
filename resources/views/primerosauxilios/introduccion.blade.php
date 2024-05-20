@extends('layouts.app',['pagina'=>'introduccion'])

@section('content')

<div class="container"> <!-- Añadimos un contenedor -->
    <div class="row justify-content-center"> <!-- Centramos el contenido -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <main id="main" class="main">
                        <div class="">
                            <h1>Introducción a Primeros Auxilios</h1>
                            <div class="text-center"> <!-- Centramos el contenido -->
                                <div class="embed-responsive embed-responsive-16by9"> <!-- Añadimos la clase para videos responsivos -->
                                    <video class="embed-responsive-item" controls>
                                        <source src="{{ asset('videos/introduccion1.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="mt-3"> <!-- Añadimos un margen superior -->
                                    <p>Duración: 20 h</p>
                                    <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
                                    <!-- Agregar un botón para ir a la próxima vista -->
                                    <a href="{{ url('primerosauxilios/plan') }}" class="btn btn-primary">Siguiente</a>
                                </div>
                            </div>
                        </div><!-- End Page Title -->
                    </main><!-- End #main -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
