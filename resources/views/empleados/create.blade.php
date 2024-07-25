@extends('layouts.app',['pagina'=>'empleados.create'])

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="">
                <div class="card-body">
                    <div class="">
                        <div class="modal-header ml-2">
                            <h3 class="modal-title" style="float: left;">Informacion General</h3>
                        </div>
                        <form id="" method="POST" action="{{ route('empleados.store') }}">
                            @csrf
                            <div class="row g-1 ml-2">
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">No.Empleado</label>
                                        <input type="text" class="form-control" id="empleado" name="empleado">

                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="nombre" class="col-sm-12 pl-0 pr-0">Correo</label>
                                        <input type="email" class="form-control" id="nombre" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label class="col-sm-12 pl-0 pr-0">Curp</label>
                                        <input type="text" class="form-control" name="curp">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label class="col-sm-12 pl-0 pr-0">Telefono</label>
                                        <input type="text" class="form-control" name="telefono">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Puesto</label>
                                        <select name="puesto" class="form-control">
                                            <option value="" selected disabled>Selecciona un Puesto</option>
                                            @foreach($puestos as $puesto)
                                            <option value="{{ $puesto->nombre }}">{{ $puesto->nombre }}</option>
                                            @endforeach
                                        </select>


                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Sala</label>
                                        <select name="sala" class="form-control">
                                            <option value="" selected disabled>Selecciona una Sala</option>
                                            @foreach($salas as $sala)
                                            <option value="{{ $sala->nombre }}">{{ $sala->nombre }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row ml-2">

                                <div class="modal-header">
                                    <h3 class="modal-title"  style="float: left;">Capacitaciones Laboral</h3>
                                </div>
                            </div>

                            <br>
                            <div class="row g-1 ml-2">

                                <div class="form-check form-check-inline col-3 mr-0 px-0">
                                    <input class="form-check-input" type="checkbox" name="cursopa" value="Primeros Auxilios">
                                    <label class="form-check-label">Primeros Auxilios</label>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for="">Fecha Inicio</label>
                                        <input type="date" class="form-control" name="cursopai">
                                    </div>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for="">Fecha Fin</label>
                                        <input type="date" class="form-control" name="cursopaf">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Ciudad</label>
                                        <select name="ciudadpa" class="form-control">
                                            <option value="" selected disabled>Selecciona una Ciudad</option>
                                            <option value="Ensenada">Ensenada</option>
                                            <option value="Mexicali">Mexicali</option>
                                            <option value="Mexicali">Rosarito</option>
                                            <option value="Tecate">Tecate</option>
                                            <option value="Tijuana">Tijuana</option>

                                        </select>

                                    </div>
                                </div>


                            </div>
                            <div class="row ml-2">
                                <div class="form-check form-check-inline col-3 mr-0 px-1">
                                    <input class="form-check-input" type="checkbox" name="cursobyr" value="Busqueda y Rescate">
                                    <label class="form-check-label">Busqueda y Rescate</label>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursobyri">
                                    </div>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursobyrf">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                        <select name="ciudadbyr" class="form-control">
                                            <option value="" selected disabled>Selecciona una Ciudad</option>
                                            <option value="Ensenada">Ensenada</option>
                                            <option value="Mexicali">Mexicali</option>
                                            <option value="Mexicali">Rosarito</option>
                                            <option value="Tecate">Tecate</option>
                                            <option value="Tijuana">Tijuana</option>

                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="row g-1 ml-2">
                                <div class="form-check form-check-inline col-3 mr-0 px-0">
                                    <input class="form-check-input" type="checkbox" name="cursomyue" value="Uso y Manejo de Extintores">
                                    <label class="form-check-label">Uso y Manejo de Extintores</label>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursomyuei">
                                    </div>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursomyuef">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                        <select name="ciudadmyue" class="form-control">
                                            <option value="" selected disabled>Selecciona una Ciudad</option>
                                            <option value="Ensenada">Ensenada</option>
                                            <option value="Mexicali">Mexicali</option>
                                            <option value="Mexicali">Rosarito</option>
                                            <option value="Tecate">Tecate</option>
                                            <option value="Tijuana">Tijuana</option>

                                        </select>

                                    </div>
                                </div>

                            </div>
                            <div class="row g-1 ml-2">
                                <div class="form-check form-check-inline col-3 mr-0 px-0">
                                    <input class="form-check-input" type="checkbox" name="cursoeyr" value="Evacuacion y Rescate">
                                    <label class="form-check-label">Procedimientos de Evacuación</label>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursoeyri">
                                    </div>
                                </div>
                                <div class="form-group col-md-3 ml-0">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="date" class="form-control" name="cursoeyrf">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                        <select name="ciudadeyr" class="form-control">
                                            <option value="" selected disabled>Selecciona una Ciudad</option>
                                            <option value="Ensenada">Ensenada</option>
                                            <option value="Mexicali">Mexicali</option>
                                            <option value="Mexicali">Rosarito</option>
                                            <option value="Tecate">Tecate</option>
                                            <option value="Tijuana">Tijuana</option>

                                        </select>

                                    </div>
                                </div>
                            </div>


                            <input class="btn btn-primary ml-4" type="submit" id="enviarlo" value="Enviar">
                        </form>
                    </div>

                </div>
            </main>
        </div>
    </div>
</div>





@endsection