@extends('layouts.app' ,['pagina'=>'plan'])
@section('content')

<div class="container">
    <div id="main" class="main">
        <br>
        <br>
    <h2 class="modulo-title">Módulo 1: Primeros Auxilios.</h2>
        <div class="row">
            <div class="col-md-6">
                
                <div class="tema">
                    <h3 class="tema-title">Tema 1: Revisión General</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Evaluación del Lugar.</li>
                        <li class="leccion-item">Lección 2: Técnicas ABC.</li>
                        <li class="leccion-item">Lección 3: Estado de Conciencia y vias Aereas.</li>
                        <li class="leccion-item">Lección 4: Respiracion.</li>
                        <li class="leccion-item">Lección 5: Circulacion.</li>
                        <li class="leccion-item">Lección 6: Oxigeno lo mas importante de nuestro cuerpo.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="modulo-title">Módulo 1: Primeros Auxilios.</h2>
                <div class="tema">
                    <h3 class="tema-title">Tema 2: Reanimación Cardio-Pulmonar (RCP).</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Compresiones y Respiraciones</li>
                        <li class="leccion-item">Lección 2: Tips de Respiraciones</li>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 3: Atragamiento.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Compresiones y Respiraciones</li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 4: Intoxicacion de Quimicos.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Que hacer en caso de una intoxicacion.</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 5: Hemorragias.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Tipos de Hemorragias.</li>
                        <li class="leccion-item">Lección 2: Tecnicas de Contension de Hemorragias.</li>
                        <li class="leccion-item">Lección 3: Video para contener una Hemorragia.</li>
                        <li class="leccion-item">Lección 4: Amputaciones.</li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 6: Golpes en la Cabeza.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Golpes en la Cabeza.</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 7: Quemaduras.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: Tipos de quemaduras.</li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 8: Fracturas.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: ¿Que hacer en caso de una fractura?.</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="tema">
                    <h3 class="tema-title">Tema 9: Convulsiones.</h3>
                    <ul class="leccion-list">
                        <li class="leccion-item">Lección 1: ¿Que hacer en caso de una Convulsión?.</li>

                    </ul>
                </div>
            </div>

        </div>


        <div class="text-center mt-3">
            <a href="revisiongeneral/evaluacion" class="btn btn-primary">Siguiente</a>
        </div>
    </div>
</div>




@endsection