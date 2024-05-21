
@extends('layouts.app',['pagina'=>'circulacion'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Circulación</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 0.42 Seg.</p>
            <p class="justify-text">En este curso aprenderás sobre la importancia de la circulación de la sangre en el 
                    cuerpo humano y cómo puedes intervenir en situaciones de emergencia para ayudar a mantener una adecuada
                     perfusión sanguínea.. ¡Te deseamos mucho éxito!</p>

        </div>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/Circulacion.mp4') }}" type="video/mp4">
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
 