@extends('layouts.app', ['pagina' => 'salas.edit'])

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
                        <form action="{{ route('salas.update', $sala->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                               
                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Nombre de la sala</label>
                                        <input type="text" class="form-control" name="nombre" value="{{ $sala->nombre }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Direccion</label>
                                        <input type="text" class="form-control" name="direccion" value="{{ $sala->direccion }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">RFC</label>
                                        <input type="text" class="form-control" name="rfc" value="{{ $sala->rfc }}">
                                    </div>
                                </div>
                                
                               
                            </div>
                                                    
                            <button type="submit" class="btn btn-primary" id="editar">Guardar Registro</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>




@endsection