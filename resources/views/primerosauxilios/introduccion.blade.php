@extends('layouts.app',['pagina'=>'introduccion'])

@section('content')

<div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <main id="main" class="main">

                    <div class="pagetitle">
                        <h1>Introduccion a Primeros Auxilios</h1>
                        <div class="">

                            <video class="video-shadow" width="900" height="350" controls>
                                <source src="{{ asset('videos/introduccion1.mp4') }}" type="video/mp4">
                            </video>
                            <div class="">
                                <p>Duración: 20 h</p>
                                <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
                                <!-- Agregar un botón para ir a la próxima vista -->
                                <a href="{{url('primerosauxilios/plan')}}" class="btn btn-primary">Siguiente</a>
                            </div>
                        </div>
                    </div><!-- End Page Title -->

                </main><!-- End #main -->
            </div>
        </div>
    </div>
</div>

@endsection