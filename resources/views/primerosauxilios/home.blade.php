@extends('layouts.app', ['pagina'=>'home'])
@section('content')

<!-- <main id="main" class="main">

    <div class="pagetitle">
      <h1>Principal 2</h1>
     
    </div>

    <section class="section dashboard">
      
      </div>
    </section>

  </main> -->
<section id="main" class="main">
  <br>
  <br>
  <div class="section-header">
    <h3 class="page_heading">Cursos</h3>
  </div>
  <div class="">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
            <div class="col-md-4 col-xl-4">
                <div class="card bg-red order-card">
                  <div class="card-block">
                    <h5 class="ml-2">Primeros Auxilios</h5>
                    <!-- Imagen debajo del h5 -->
                    <div class="d-flex justify-content-center align-items-center mb-3">
                      <img src="{{ asset('img/Primeros.jpg') }}" alt="Imagen" class="img-fluid" width="250" height="200">
                    </div>

                    <p class="m-b-0 text-right"><a href="{{url('primerosauxilios/registrarse')}}" class="mr-2">Ir a...</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xl-4">
                <div class="card bg-red order-card">
                  <div class="card-block">
                    <h5 class="ml-2">Busqueda Y rescate</h5>
                    <!-- Imagen debajo del h5 -->
                    <div class="d-flex justify-content-center align-items-center mb-3">
                      <img src="{{ asset('img/Busqueda.jpeg') }}" alt="Imagen" class="img-fluid" width="225" height="200">
                    </div>

                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver mas</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-xl-4">
                <div class="card bg-red order-card">
                  <div class="card-block">
                    <h5 class="ml-2">Manejo de Extintores</h5>
                    <!-- Imagen debajo del h5 -->
                    <div class="d-flex justify-content-center align-items-center mb-3">
                      <img src="{{ asset('img/Manejo.jpeg') }}" alt="Imagen" class="img-fluid" width="225" height="200">
                    </div>

                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver mas</a></p>
                  </div>
                </div>
              </div>
              </div>

              <div class="col-md-4 col-xl-4">
                <div class="card bg-red order-card">
                  <div class="card-block">
                    <h5 class="ml-2">Procedimientos de Evacuacion</h5>
                    <!-- Imagen debajo del h5 -->
                    <div class="d-flex justify-content-center align-items-center mb-3">
                      <img src="{{ asset('img/Procedimientos.jpg') }}" alt="Imagen" class="img-fluid" width="225" height="200">
                    </div>

                    <p class="m-b-0 text-right"><a href="/login/public/roles" class="mr-2">Ver mas</a></p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include ('layouts.footer')
@endsection