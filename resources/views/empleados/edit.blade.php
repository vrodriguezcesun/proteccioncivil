@extends('layouts.app', ['pagina' => 'empleados.edit'])

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="">
                <div class="card-body">
                    <div class="">
                        <div class="modal-header">
                            <h3 class="modal-title" style="float: left;">Informacion General</h3>
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



                                <!-- <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="sala" class="col-sm-12 pl-0 pr-0">Sala</label>
                                        <input type="text" class="form-control" name="sala" value="{{ $empleado->sala }}">
                                    </div>
                                </div> -->
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
                            </div>
                            <div class="modal-header">
                                <h3 class="modal-title" style="float: left;">Informacion de Capacitaciones</h3>
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
                                                <input type="text" class="form-control" name="cursopa" value="{{ $empleado->cursopa }}" onmouseout="this.placeholder = 'Ingrese Primeros Auxilios'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursopai" value="{{ $empleado->cursopai }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursopaf" value="{{ $empleado->cursopaf }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ciudadpa" value="{{ $empleado->ciudadpa }}">
                                            </td>

                                            <td>
                                                <a href="{{ route('empleados.certificado', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="cursobyr" value="{{ $empleado->cursobyr }}" onmouseout="this.placeholder = 'Ingrese Busqueda y Rescate'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursobyri" value="{{ $empleado->cursobyri }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursobyrf" value="{{ $empleado->cursobyrf }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ciudadbyr" value="{{ $empleado->ciudadbyr }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadobyr', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                           
                                            <td>
                                                <input type="text" class="form-control" name="cursomyue" value="{{ $empleado->cursomyue }}" onmouseout="this.placeholder = 'Ingrese Manejo y Uso'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursomyuei" value="{{ $empleado->cursomyuei }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursomyuef" value="{{ $empleado->cursomyuef }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ciudadmyue" value="{{ $empleado->ciudadmyue }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadoME', $empleado->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                          
                                            <td>
                                                <input type="text" class="form-control" name="cursoeyr" value="{{ $empleado->cursoeyr }}" onmouseout="this.placeholder = 'Ingrese  y Evacuacion y Rescate'">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursoeyri" value="{{ $empleado->cursoeyri }}">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="cursoeyrf" value="{{ $empleado->cursoeyrf }}">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ciudadeyr" value="{{ $empleado->ciudadeyr }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('empleados.certificadoeyr', $empleado->id) }}" style="display: flex; justify-content: left;">
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