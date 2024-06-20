@extends('layouts.app',['pagina'=>'empleados.dashboard'])
@section('content')
<section id="main" class="container responsive">
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Total Empleados</h5>
                                    @php
                                    use App\Models\Empleado;
                                    $cant_empelados = Empleado::count();
                                    @endphp
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/todosempleados.jpg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_empleados}}</span>
                                    </h2>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Total Capacitados</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Capacitaciones.jpeg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_empleados_capacitados}}</span>
                                    </h2>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Primeros Auxilios</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Primeros.jpg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_primerosauxilios}}</span>
                                    </h2>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Busqueda y Rescate</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Busqueda.jpeg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_busquedayrescate}}</span>
                                    </h2>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4 mb-4">
                            <div class="card bg-red order-card">
                                <div class="card-block">
                                    <h5 class="ml-2">Uso y Manejo de Extintores</h5>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('img/Manejo.jpeg') }}" alt="Imagen" class="img-fluid">
                                    </div>
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_myue}}</span>
                                    </h2>

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
                                    <h2 class="text-left d-flex justify-content-between">
                                        <i class=""></i>
                                        <span class="mr-4">{{$cant_eyr}}</span>
                                    </h2>

                                </div>
                            </div>
                        </div>
                    
                     
                    </div>
                    <!-- Aquí puedes añadir más tarjetas si es necesario -->
                </div>
                <div class="table-responsive ml-4 pr-4">
                    <form method="GET" action="{{ route('empleados.dashboard') }}">
                        <div class="row mb-3">
                            <div class="col-4">
                                <div class="col-sm-12 pl-0 pr-0">
                                    <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                    <select name="sala" class="form-control">
                                    <option value="" selected disabled>Selecciona Sala</option>
                                            @foreach($salas as $sala)
                                            <option value="{{ $sala->nombre }}">{{ $sala->nombre }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="col-sm-12 pl-0 pr-0">
                                    <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                    <select name="curso" class="form-control">
                                        <option value="" selected disabled>Selecciona Curso</option>
                                        
                                        <option value="Primeros Auxilios">Primeros Auxilios</option>
                                        <option value="Busqueda y Rescate">Busqueda y Rescate</option>
                                        <option value="Uso y Manejo de Extintores">Uso y Manejo de Extintores</option>
                                        <option value="Procedimientos de Evacuacion">Procedimientos de Evacuacion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-sm-12 pl-0 pr-0">
                                    <label for="" class="col-sm-12 pl-0 pr-0"></label>
                                    <input type="date" name="fecha" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-sm-4 pl-0 pr-0">
                                    <label for="" class="col-sm-10 pl-0 pr-0"></label>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-sm-4 pl-0 pr-0">
                                    <label for="" class="col-sm-10 pl-0 pr-0"></label>
                                    <a href="" style="display: flex; justify-content: left;">
                                        <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>


                    <table id="" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th style="display: none;">ID</th>

                                <th>Sala</th>
                                <th>Curso</th>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->sala }}</td>
                                <td>
                                    @switch($curso)
                                    @case('Primeros Auxilios')
                                    {{ $empleado->cursopa }}
                                    @break
                                    @case('Busqueda y Rescate')
                                    {{ $empleado->cursobyr }}
                                    @break
                                    @case('Uso y Manejo de Extintores')
                                    {{ $empleado->cursomyue }}
                                    @break
                                    @case('Procedimientos de Evacuacion')
                                    {{ $empleado->cursoeyr }}
                                    @break
                                    @endswitch
                                </td>
                                <td>
                                    @if($curso == 'Primeros Auxilios')
                                    {{ $empleado->cursopai }}
                                    @elseif($curso == 'Busqueda y Rescate')
                                    {{ $empleado->cursobyri }}
                                    @elseif($curso == 'Uso y Manejo de Extintores')
                                    {{ $empleado->cursomyuei }}
                                    @elseif($curso == 'Procedimientos de Evacuacion')
                                    {{ $empleado->cursoeyri }}
                                    @endif
                                </td>
                                <td>{{ $empleado->nombre }}</td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">No se encontraron empleados</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>


                </div>
            </div>


            <!-- Incluye jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <!-- Incluye DataTables -->
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#mytable').DataTable({
                        // Opciones adicionales de configuración si es necesario
                    });
                });
            </script>
        </div>

</section>

@endsection