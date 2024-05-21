
 @extends('layouts.app',['pagina'=>'estado'])

@section('content')

<div class="container">
    <br>
    <br>
    <main id="main" class="main">

        <h1 class="text-center">Estado de Conciencia</h1>
        <div class="mt-3">
            <p class="text-center">Duración: 0.42 Seg.</p>
            <p class="justify-text">En este curso, aprenderás cómo evaluar el estado de conciencia de una persona en una situación de emergencia.
                    Esta evaluación es fundamental para determinar el nivel de respuesta de la víctima y el tipo de atención que necesita.
                    ¡Te deseamos mucho éxito!</p>

        </div>
        <div class="text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ asset('videos/revisiongeneral/Estadodeconciencia.mp4') }}" type="video/mp4">
                </video>
            </div>


        </div>
        <div class="mt-3">
            <div class="text-center">
                <a href="{{url('primerosauxilios/revisiongeneral/respiracion')}}" class="btn btn-primary">Siguiente</a>
            </div>
        </div>
    </main>
</div>

@endsection
 