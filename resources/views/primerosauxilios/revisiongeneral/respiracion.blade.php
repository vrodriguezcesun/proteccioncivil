@extends('layouts.app',['pagina'=>'respiracion'])
@section('content')
<main id="main" class="main">
<div class="pagetitle">
<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
<h1>Respiracion</h1>

    <div class="">
        <div class="">
            <video class="video-shadow" width="900" height="350" controls>
                <source src="{{ asset('videos/revisiongeneral/Respiracion.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="">
            <p>Duración: 2:13 Min.</p>
            <p>¡Bienvenido! En esta capacitación se muestran los elementos básicos para adquirir y utilizar de forma responsable los instrumentos de primeros auxilios. ¡Te deseamos mucho éxito!</p>
        </div>
    </div>
    <a href="{{url('primerosauxilios/revisiongeneral/circulacion')}}" class="btn btn-primary">Siguiente</a>
</div>
</main>
@endsection