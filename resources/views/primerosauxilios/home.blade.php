@extends('layouts.app', ['pagina' => 'home'])
@section('content')

<style>

</style>

<section id="main" class="container">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Primeros Auxilios</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Primeros.jpg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <p class="m-b-0 text-right"><a href="{{ url('primerosauxilios/registrarse') }}" class="mr-2">Ir a...</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Búsqueda y Rescate</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Busqueda.jpeg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver más</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Manejo de Extintores</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Manejo.jpeg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver más</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Procedimientos de Evacuación</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Procedimientos.jpg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver más</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Aquí puedes añadir más tarjetas si es necesario -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
@endsection
