@extends('layouts.app',['pagina'=>'puestos.create'])

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="main">
                <div class="card-body">
                    <div class="pagetitle">
                        <div class="modal-header">
                            <h3 class="modal-title" style="float: left;">Informacion General</h3>
                        </div>
                        <form id="" method="POST" action="{{ route('puestos.store') }}">
                            @csrf
                            <div class="row g-1">
                             
                                <div class="form-group col-md-6">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Nombre del Puesto</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                           <br>
                    <input class="btn btn-primary" type="submit" id="enviarlopuesto" value="Enviar">
                        </form>
                    </div>

                </div>
            </main>
        </div>
    </div>
</div>





@endsection