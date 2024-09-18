@extends('layouts.app', ['pagina' => 'empleados.edit'])

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="">
                <div class="card-body">
                    <div class="">
                        <div class="modal-header">
                            <h3 class="modal-title" style="float: left;">Información General</h3>
                        </div>
                        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row ml-2">
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="empleado" class="col-sm-12 pl-0 pr-0">No.Empleado</label>
                                        <input type="text" class="form-control" name="empleado" value="{{ $empleado->empleado }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Nombre Completo</label>
                                        <input type="text" class="form-control" name="nombre" value="{{ $empleado->nombre }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Correo</label>
                                        <input type="email" class="form-control" name="email" value="{{ $empleado->email }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Curp</label>
                                        <input type="text" class="form-control" name="curp" value="{{ $empleado->curp }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Telefono</label>
                                        <input type="text" class="form-control" name="telefono" value="{{ $empleado->telefono }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="puesto" class="col-sm-12 pl-0 pr-0">Puesto</label>
                                        <select name="puesto" class="form-control">
                                            <option value="{{ $empleado->puesto }}">{{ $empleado->puesto }}</option>
                                            @foreach($puestos as $puesto)
                                            <option value="{{ $puesto->nombre }}">{{ $puesto->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="sala" class="col-sm-12 pl-0 pr-0">Sala</label>
                                        <select name="sala" class="form-control">
                                            <option value="{{ $empleado->sala }}">{{ $empleado->sala }}</option>
                                            @foreach($salas as $sala)
                                            <option value="{{ $sala->nombre }}">{{ $sala->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Empresa</label>
                                        <input type="text" class="form-control" name="empresa" value="{{ $empleado->empresa }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">RFC</label>
                                        <input type="text" class="form-control" name="rfc" value="{{ $empleado->rfc }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Registro patronal IMSS</label>
                                        <input type="text" class="form-control" name="imss" value="{{ $empleado->imss }}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-header">
                                <h3 class="modal-title" style="float: left;">Información de Capacitaciones</h3>
                            </div>
                            <div class="form-group">
                                <table class="table ml-2">
                                    <thead>
                                        <tr>

                                            <th>Curso</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Ciudad</th>
                                            <th>Certificado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <!--  <input type="text" class="form-control" name="cursopa" value="{{ $empleado->cursopa }}" onmouseout="this.placeholder = 'Ingrese Primeros Auxilios'"> -->
                                                <select class="form-control" name="cursopa">
                                                    <option value="" {{ $empleado->cursopa == '' ? 'selected' : '' }}></option>
                                                    <option value="Primeros Auxilios" {{ $empleado->cursopa == 'Primeros Auxilios' ? 'selected' : '' }}>Primeros Auxilios</option>
                                                </select>

                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursopai" value="{{ $empleado->cursopai }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursopaf" value="{{ $empleado->cursopaf }}">
                                            </td>
                                            <td>
                                                <!--  <input type="text" class="form-control" name="ciudadpa" value="{{ $empleado->ciudadpa }}"> -->

                                                <select class="form-control" name="ciudadpa">
                                                    <option value="" {{ $empleado->ciudadpa == '' ? 'selected' : '' }}></option>
                                                    <option value="Ensenada" {{ $empleado->ciudadpa == 'Ensenada' ? 'selected' : '' }}>Ensenada</option>
                                                    <option value="Mexicali" {{ $empleado->ciudadpa == 'Mexicali' ? 'selected' : '' }}>Mexicali</option>
                                                    <option value="Rosarito" {{ $empleado->ciudadpa == 'Rosarito' ? 'selected' : '' }}>Rosarito</option>
                                                    <option value="Tecate" {{ $empleado->ciudadpa == 'Tecate' ? 'selected' : '' }}>Tecate</option>
                                                    <option value="Tijuana" {{ $empleado->ciudadpa == 'Tijuana' ? 'selected' : '' }}>Tijuana</option>
                                                </select>
                                            </td>

                                            <td>
                                                <a href="{{ route('empleados.certificado', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <!-- <input type="text" class="form-control" name="cursobyr" value="{{ $empleado->cursobyr }}" onmouseout="this.placeholder = 'Ingrese Busqueda y Rescate'"> -->
                                                <select class="form-control" name="cursobyr">
                                                    <option value="" {{ $empleado->cursobyr == '' ? 'selected' : '' }}></option>
                                                    <option value="Busqueda y Rescate" {{ $empleado->cursobyr == 'Busqueda y Rescate' ? 'selected' : '' }}>Busqueda y Rescate</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursobyri" value="{{ $empleado->cursobyri }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursobyrf" value="{{ $empleado->cursobyrf }}">
                                            </td>
                                            <td>
                                                <!-- <input type="text" class="form-control" name="ciudadbyr" value="{{ $empleado->ciudadbyr }}"> -->

                                                <select class="form-control" name="ciudadbyr">
                                                    <option value="" {{ $empleado->ciudadbyr == '' ? 'selected' : '' }}></option>
                                                    <option value="Ensenada" {{ $empleado->ciudadbyr == 'Ensenada' ? 'selected' : '' }}>Ensenada</option>
                                                    <option value="Mexicali" {{ $empleado->ciudadbyr == 'Mexicali' ? 'selected' : '' }}>Mexicali</option>
                                                    <option value="Rosarito" {{ $empleado->ciudadbyr == 'Rosarito' ? 'selected' : '' }}>Rosarito</option>
                                                    <option value="Tecate" {{ $empleado->ciudadbyr == 'Tecate' ? 'selected' : '' }}>Tecate</option>
                                                    <option value="Tijuana" {{ $empleado->ciudadbyr == 'Tijuana' ? 'selected' : '' }}>Tijuana</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadobyr', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                               <!--  <input type="text" class="form-control" name="cursomyue" value="{{ $empleado->cursomyue }}" onmouseout="this.placeholder = 'Ingrese Uso y Manejo de Extintores'"> -->
                                               <select class="form-control" name="cursomyue">
                                                    <option value="" {{ $empleado->cursomyue == '' ? 'selected' : '' }}></option>
                                                    <option value="Uso y Manejo de Extintores" {{ $empleado->cursomyue == 'Uso y Manejo de Extintores' ? 'selected' : '' }}>Uso y Manejo de Extintores</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursomyuei" value="{{ $empleado->cursomyuei }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursomyuef" value="{{ $empleado->cursomyuef }}">
                                            </td>
                                            <td>
                                                <!-- <input type="text" class="form-control" name="ciudadmyue" value="{{ $empleado->ciudadmyue }}"> -->
                                                <select class="form-control" name="ciudadmyue">
                                                    <option value="" {{ $empleado->ciudadmyue == '' ? 'selected' : '' }}></option>
                                                    <option value="Ensenada" {{ $empleado->ciudadmyue == 'Ensenada' ? 'selected' : '' }}>Ensenada</option>
                                                    <option value="Mexicali" {{ $empleado->ciudadmyue == 'Mexicali' ? 'selected' : '' }}>Mexicali</option>
                                                    <option value="Rosarito" {{ $empleado->ciudadmyue == 'Rosarito' ? 'selected' : '' }}>Rosarito</option>
                                                    <option value="Tecate" {{ $empleado->ciudadmyue == 'Tecate' ? 'selected' : '' }}>Tecate</option>
                                                    <option value="Tijuana" {{ $empleado->ciudadmyue == 'Tijuana' ? 'selected' : '' }}>Tijuana</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadoME', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                             <!--    <input type="text" class="form-control" name="cursoeyr" value="{{ $empleado->cursoeyr }}" onmouseout="this.placeholder = 'Ingrese Procedimientos de Evacuacion'"> -->
                                             <select class="form-control" name="cursoeyr">
                                                    <option value="" {{ $empleado->cursoeyr == '' ? 'selected' : '' }}></option>
                                                    <option value="Procedimientos de Evacuacion" {{ $empleado->cursoeyr == 'Procedimientos de Evacuacion' ? 'selected' : '' }}>Procedimientos de Evacuacion</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursoeyri" value="{{ $empleado->cursoeyri }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursoeyrf" value="{{ $empleado->cursoeyrf }}">
                                            </td>
                                            <td>
                                                <!--  <input type="text" class="form-control" name="ciudadeyr" value="{{ $empleado->ciudadeyr }}"> -->
                                                <select class="form-control" name="ciudadeyr">
                                                    <option value="" {{ $empleado->ciudadeyr == '' ? 'selected' : '' }}></option>
                                                    <option value="Ensenada" {{ $empleado->ciudadeyr == 'Ensenada' ? 'selected' : '' }}>Ensenada</option>
                                                    <option value="Mexicali" {{ $empleado->ciudadeyr == 'Mexicali' ? 'selected' : '' }}>Mexicali</option>
                                                    <option value="Rosarito" {{ $empleado->ciudadeyr == 'Rosarito' ? 'selected' : '' }}>Rosarito</option>
                                                    <option value="Tecate" {{ $empleado->ciudadeyr == 'Tecate' ? 'selected' : '' }}>Tecate</option>
                                                    <option value="Tijuana" {{ $empleado->ciudadeyr == 'Tijuana' ? 'selected' : '' }}>Tijuana</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadoeyr', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
    <td>
        Constancia de DC3
    </td>
    <td>
        <!-- No es necesario un campo de fecha para esta constancia -->
    </td>
    <td>
        <!-- No es necesario un campo de fecha para esta constancia -->
    </td>
    <td>
        <!-- No es necesario un campo de ciudad para esta constancia -->
    </td>
    <td>
        <!-- Agrega el enlace para generar el PDF de la constancia -->
        <a href="{{ route('empleados.dc3', $empleado->id) }}" style="display: flex; justify-content: left;">
            <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
        </a>
    </td>
</tr>

                                    </tbody>
                                </table>
                            </div>

                            <button type="submit" class="btn btn-primary ml-3" id="editar">Guardar Registro</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>




@endsection