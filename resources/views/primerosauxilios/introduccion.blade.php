@extends('layouts.app',['pagina'=>'introduccion'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">
        <h1 class="text-center">Introducción a Primeros Auxilios</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 1.04 Seg.</p>
            <p class="justify-text">¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>

        </div>

        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/introduccion1.mp4') }}" type="video/mp4">
                </video>
            </div>

        </div>
        <div class="mt-3">
            <div class="text-center">
                <a href="{{ url('primerosauxilios/plan') }}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>

    </main>
</div>

@endsection