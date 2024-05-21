 
@extends('layouts.app',['pagina'=>'oxigeno'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Oxigenación en el cuerpo</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 0.42 Seg.</p>
            <p class="justify-text">Al finalizar este curso, estarás capacitado para actuar con confianza y efectividad en situaciones
                de emergencia que afectan la oxigenación del cuerpo. Este conocimiento es crucial no solo para salvar vidas, sino 
                también para mejorar las posibilidades de recuperación de las personas afectadas... ¡Te deseamos mucho éxito!</p>

        </div>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/Oxigeno.mp4') }}" type="video/mp4">
                </video>
            </div>


        </div>
        <div class="mt-3">
            <div class="text-center">
                <a href="{{url('primerosauxilios/revisiongeneral/oxigenacion')}}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>
    </main>
</div>

@endsection
 