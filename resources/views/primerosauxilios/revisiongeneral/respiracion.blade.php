
@extends('layouts.app',['pagina'=>'respiracion'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Respiración</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 0.42 Seg.</p>
            <p class="justify-text">En este curso, aprenderás cómo evaluar y manejar la respiración de una persona en una situación de emergencia.
                La respiración es un componente vital para la supervivencia, y saber cómo evaluar y asistir a alguien con problemas
                respiratorios puede salvar vidas.¡Te deseamos mucho éxito!</p>

        </div>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/Respiracion.mp4') }}" type="video/mp4">
                </video>
            </div>


        </div>
        <div class="mt-3">
            <div class="text-center">
                <a href="{{url('primerosauxilios/revisiongeneral/circulacion')}}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>
    </main>
</div>

@endsection
 