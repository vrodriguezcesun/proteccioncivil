@extends('layouts.app',['pagina'=>'introduccion'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Introducción a Primeros Auxilios</h1>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/introduccion1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="mt-3">
                <p class="text-center">Duración: 1.04 min</p>
                <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
                <div class="text-center">
                    <a href="{{ url('primerosauxilios/plan') }}" class="btn btn-primary">Siguiente</a>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
</div>

@endsection
