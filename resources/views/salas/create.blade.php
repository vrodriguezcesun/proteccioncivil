@extends('layouts.app',['pagina'=>'salas.create'])

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
                        <form id="" method="POST" action="{{ route('salas.store') }}">
                            @csrf
                            <div class="row g-1">
                              
                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Nombre de Sala</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="nombre" class="col-sm-12 pl-0 pr-0">Direccion</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label class="col-sm-12 pl-0 pr-0">RFC</label>
                                        <input type="text" class="form-control" name="rfc">
                                    </div>
                                </div>
                                
                              
                            </div>
                      



                            <input class="btn btn-primary" type="submit" id="enviarlosala" value="Enviar">
                        </form>
                    </div>

                </div>
            </main>
        </div>
    </div>
</div>





@endsection