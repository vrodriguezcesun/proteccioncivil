@extends('layouts.app',['pagina'=>'tecnicas'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Tecnicas ABC</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 0.42 Seg.</p>
            <p class="justify-text">En este curso, aprenderás las técnicas fundamentales de primeros auxilios conocidas como ABC,
                     que se refieren a la evaluación y el tratamiento de la Vía Aérea (Airway), la Respiración
                     (Breathing) y la Circulación (Circulation). Estas técnicas son esenciales para salvar vidas
                     en situaciones de emergencia.¡Te deseamos mucho éxito!</p>

        </div>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/TecnicasABC.mp4') }}" type="video/mp4">
                </video>
            </div>


        </div>
        <div class="mt-3">
            <div class="text-center">
                <a href="{{url('primerosauxilios/revisiongeneral/estadodeconciencia')}}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>
    </main>
</div>

@endsection
 