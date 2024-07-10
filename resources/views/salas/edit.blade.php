@extends('layouts.app', ['pagina' => 'salas.edit'])

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="main">
                <div class="card-body">
                    <div class="ml-4 mt-4">
                        <div class="modal-header">
                            <h3 class="modal-title" style="float: left">Informacion General</h3>
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
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Fecha</label>
                                        <input type="text" class="form-control" name="fecha" value="{{ $sala->fecha }}">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-header">
                                <h3 class="modal-title" style="float: left;">Información de Mantenimientos</h3>
                            </div>
                            <div class="form-group">
                                <table class="table ml-2">
                                    <thead>
                                        <tr>
                                          
                                            <th>Mantenimientos</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Formato</th>
                                            <th>Servicio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td>
                                                <input type="text" class="form-control" name="" value="" onmouseout="this.placeholder = 'Ingrese Servicio'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" name="" value="">
                                            </td>

                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="" value="" onmouseout="this.placeholder = 'Ingrese Busqueda y Rescate'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                           
                                            <td>
                                                <input type="text" class="form-control" name="" value="" onmouseout="this.placeholder = 'Ingrese Uso y Manejo de Extintores'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="" value="" onmouseout="this.placeholder = 'Ingrese  y Evacuacion y Rescate'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name=" value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-header">
                                <h3 class="modal-title" style="float: left;">Información de Equipo</h3>
                            </div>
                            <div class="form-group">
                                <table class="table ml-2">
                                    <thead>
                                        <tr>
                                          
                                            <th class="col-cantidad">Cantidad</th>
                                            <th class="col-descripcion">Descripcion</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td>
                                                <input type="text" class="form-control" name="cantidad" value="{{ $sala->cantidad }}">
                                            </td>
                                            <td>
                                            <input type="text" class="form-control" name="descripcion" value="{{ $sala->descripcion }}" placeholder="Descripcion de Detector de Humo">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="marca" value="{{ $sala->marca }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="modelo" value="{{ $sala->modelo }}">
                                            </td>

                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="cantdet" value="{{ $sala->cantdet }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="descripciondet" value="{{ $sala->descripciondet }}" data-placeholder="Descripcion de Detector Humo">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="marcadet" value="{{ $sala->marcadet }}" data-placeholder="Marca">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="modelodet" value="{{ $sala->modelodet }}" data-placeholder="Modelo">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                           
                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="" data-placeholder="Descripcion de Detector Termico">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="" data-placeholder="Marca">
                                            </td> 
                                            <td>
                                                <input type="text" class="form-control" name="" value="" data-placeholder="Modelo">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="" data-placeholder="Descripcion de PhotoBeam">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name=" value="" data-placeholder="Marca">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="" value="" data-placeholder="Modelo">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                                                    
                            <button type="submit" class="btn btn-primary" id="editar">Guardar Registro</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var inputs = document.querySelectorAll('.form-control');
    inputs.forEach(function(input) {
        var placeholderText = input.getAttribute('data-placeholder');
        input.addEventListener('mouseover', function() {
            input.setAttribute('placeholder', placeholderText);
        });
        input.addEventListener('mouseout', function() {
            input.setAttribute('placeholder', '');
        });
    });
});
</script>
@endsection