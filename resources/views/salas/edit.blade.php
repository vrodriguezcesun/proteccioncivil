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
                                        <label for="" class="col-sm-12 pl-0 pr-0">Sala</label>
                                        <input type="text" class="form-control" name="sala" value="{{ $sala->sala }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="" class="col-sm-12 pl-0 pr-0">Ciudad</label>
                                        <input type="text" class="form-control" name="ciudad" value="{{ $sala->ciudad }}">
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
                                <h3 class="modal-title" style="float: left;">Relación y Constancias de Personal Capacitado</h3>
                            </div>


                            <div class="form-group">
                                <table class="table ml-2">
                                    <thead>
                                        <tr>
                                            <th>Año</th>
                                            <th>Descripción de Cosntancias</th>
                                            <th>Constancias</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>Constancia Empresa</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadosa', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>3.1.1 Personal Capacitado</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.reportecursos', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>4.1 Directorio de Unidad Interna</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadosui', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>Primeros Auxilios</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadospa', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>Busqueda y Rescate</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadosbyr', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>Uso y Manejo de Extintores</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadosmyue', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="" value="">
                                            </td>
                                            <td>
                                                <p>Procedimientos de Evacuación</p>
                                            </td>

                                            <td>
                                                <a href="{{ route('salas.certificadoseyr', $sala->id) }}" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

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
                                                <input type=" text" class="form-control" name="" value="">
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
                                                <input type="text" class="form-control" name="cantidad" value="{{ $sala->cantidad }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <!--     <input type="text" class="form-control" name="descripcion" value="{{ $sala->descripcion }}" data-placeholder="Descripcion de Panel de Incendio"> -->
                                                <select class="form-control" name="descripcion">
                                                    <option value="" {{ $sala->descripcion == '' ? 'selected' : '' }}></option>
                                                    <option value="Panel de deteccion de Incendio" {{ $sala->descripcion == 'Panel de deteccion de Incendio' ? 'selected' : '' }}>Panel de deteccion de Incendio</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="marca">
                                                    <option value="" {{ $sala->marca == '' ? 'selected' : '' }}></option>
                                                    <option value="Firelite" {{ $sala->marca == 'Firelite' ? 'selected' : '' }}>Firelite</option>
                                                    <option value="Honeywell" {{ $sala->marca == 'Honeywell' ? 'selected' : '' }}>Honeywell</option>
                                                    <option value="Notifier" {{ $sala->marca == 'Notifier' ? 'selected' : '' }}>Notifier</option>
                                                    <option value="Silent Night" {{ $sala->marca == 'Silent Night' ? 'selected' : '' }}>Silent Knight</option>

                                                </select>

                                            </td>
                                            <td>
                                                <!--  <input type="text" class="form-control" name="modelo" value="{{ $sala->modelo }}"> -->
                                                <select class="form-control" name="modelo">
                                                    <option value="" {{ $sala->modelo == '' ? 'selected' : '' }}></option>
                                                    <option value="5700" {{ $sala->modelo == '5700' ? 'selected' : '' }}>5700</option>
                                                    <option value="5808" {{ $sala->modelo == '5808' ? 'selected' : '' }}>5808</option>
                                                    <option value="6808" {{ $sala->modelo == '6808' ? 'selected' : '' }}>6808</option>
                                                    <option value="ES-50XI" {{ $sala->modelo == 'ES-50XI' ? 'selected' : '' }}>ES-50XI</option>
                                                    <option value="MFS-320" {{ $sala->modelo == 'MFS-320' ? 'selected' : '' }}>MFS-320</option>
                                                    <option value="MS-9200UDLS" {{ $sala->modelo == 'MS-9200UDLS' ? 'selected' : '' }}>MS-9200UDLS</option>
                                                    <option value="MS-9050UD" {{ $sala->modelo == 'MS-9050UD' ? 'selected' : '' }}>MS-9050UD</option>
                                                    <option value="SK2224" {{ $sala->modelo == 'SK2224' ? 'selected' : '' }}>SK2224</option>
                                                    <option value="Vista 128" {{ $sala->modelo == 'Vista 128' ? 'selected' : '' }}>Vista 128</option>

                                                </select>
                                            </td>

                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="cantdet" value="{{ $sala->cantdet }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <!-- <input type="text" class="form-control" name="descripciondet" value="{{ $sala->descripciondet }}" data-placeholder="Descripcion de Detector Humo"> -->
                                                <select class="form-control" name="descripciondet">
                                                    <option value="" {{ $sala->descripciondet == null ? 'selected' : '' }} style="color: #9999;">Seleccione detector Humo</option>

                                                    <option value="Detector de Humo Fotoelectrico" {{ $sala->descripciondet == 'Detector de Humo Fotoelectrico' ? 'selected' : '' }}>Detector de Humo Fotolectrico</option>
                                                </select>
                                            </td>
                                            <td>
                                                <!--          <input type="text" class="form-control" name="marcadet" value="{{ $sala->marcadet }}" data-placeholder="Marca"> -->
                                                <select class="form-control" name="marcadet">
                                                    <option value="" {{ $sala->marcadet == '' ? 'selected' : '' }}></option>
                                                    <option value="Firelite" {{ $sala->marcadet == 'Firelite' ? 'selected' : '' }}>Firelite</option>
                                                    <option value="Honeywell" {{ $sala->marcadet == 'Honeywell' ? 'selected' : '' }}>Honeywell</option>
                                                    <option value="Notifier" {{ $sala->marcadet == 'Notifier' ? 'selected' : '' }}>Notifier</option>
                                                    <option value="Silent Night" {{ $sala->marcadet == 'Silent Night' ? 'selected' : '' }}>Silent Knight</option>

                                                </select>

                                            </td>
                                            <td>
                                                <!--    <input type="text" class="form-control" name="modelodet" value="{{ $sala->modelodet }}" data-placeholder="Modelo"> -->
                                                <select class="form-control" name="modelodet">
                                                    <option value="" {{ $sala->modelodet == '' ? 'selected' : '' }}></option>
                                                    <option value="5193-SDT" {{ $sala->modelodet == '5193-SDT' ? 'selected' : '' }}>5193-SDT</option>
                                                    <option value="5806W3" {{ $sala->modelodet == '5806W3' ? 'selected' : '' }}>5806W3</option>
                                                    <option value="SD-365" {{ $sala->modelodet == 'SD-365' ? 'selected' : '' }}>SD-365</option>
                                                    <option value="SD365-IV" {{ $sala->modelodet == 'SD365-IV' ? 'selected' : '' }}>SD365-IV</option>
                                                    <option value="SD505PHOTO" {{ $sala->modelodet == 'SD505PHOTO' ? 'selected' : '' }}>SD505PHOTO</option>
                                                    <option value="SK-PHOTO" {{ $sala->modelodet == 'SK-PHOTO' ? 'selected' : '' }}>SK-PHOTO</option>

                                                </select>
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="cantterm" value="{{ $sala->cantterm }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <!--  <input type="text" class="form-control" name="descripcionterm" value="{{ $sala->descripcionterm }}" data-placeholder="Descripcion de Detector Termico"> -->
                                                <select class="form-control" name="descripcionterm">
                                                    <option value="" {{ $sala->descripcionterm == null ? 'selected' : '' }}>Seleccione detector de temperatura</option>
                                                    <option value="Detector de Temperatura" {{ $sala->descripcionterm == 'Detector de Temperatura' ? 'selected' : '' }}>Detector de Temperatura</option>
                                                </select>

                                            </td>
                                            <td>
                                                <!--  <input type="text" class="form-control" name="marcaterm" value="{{ $sala->marcaterm }}" data-placeholder="Marca"> -->
                                                <select class="form-control" name="marcaterm">
                                                    <option value="" {{ $sala->marcaterm == '' ? 'selected' : '' }}></option>
                                                    <option value="Firelite" {{ $sala->marcaterm == 'Firelite' ? 'selected' : '' }}>Firelite</option>
                                                    <option value="Honeywell" {{ $sala->marcaterm == 'Honeywell' ? 'selected' : '' }}>Honeywell</option>
                                                    <option value="Notifier" {{ $sala->marcaterm == 'Notifier' ? 'selected' : '' }}>Notifier</option>
                                                    <option value="Silent Night" {{ $sala->marcaterm == 'Silent Night' ? 'selected' : '' }}>Silent Knight</option>

                                                </select>

                                            </td>
                                            <td>
                                                <!--   <input type="text" class="form-control" name="modeloterm" value="{{ $sala->modeloterm }}" data-placeholder="Modelo"> -->
                                                <select class="form-control" name="modeloterm"">
                                                    <option value="" {{ $sala->modeloterm == '' ? 'selected' : '' }}></option>
                                                    <option value=" H-365" {{ $sala->modeloterm == 'H-365' ? 'selected' : '' }}>H-365</option>
                                                    <option value="SD-365T" {{ $sala->modeloterm == 'SD-365T' ? 'selected' : '' }}>SD-365T</option>
                                                    <option value="H365-IV" {{ $sala->modeloterm == 'H365-IV' ? 'selected' : '' }}>H365-IV</option>
                                                    <option value="SKHEATW" {{ $sala->modeloterm == 'SKHEATW' ? 'selected' : '' }}>SKHEATW</option>
                                                    <option value="SKPHOTOT" {{ $sala->modeloterm == 'SKPHOTOT' ? 'selected' : '' }}>SKPHOTOT</option>
                                                    <option value="SKPHOTOTW" {{ $sala->modeloterm == 'SKPHOTOTW' ? 'selected' : '' }}>SKPHOTOTW</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="cantdual" value="{{ $sala->cantdual }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="descripciondual" value="{{ $sala->descripciondual }}" data-placeholder="Descripcion de detector Dual">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="marcadual" value="{{ $sala->marcadual }}" data-placeholder="Marca">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="modelodual" value="{{ $sala->modelodual }}" data-placeholder="Modelo">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="cantphoto" value="{{ $sala->cantphoto }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="descripcionphoto" value="{{ $sala->descripcionphoto }}" data-placeholder="Descripcion de PhotoBeam">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="marcaphoto" value="{{ $sala->marcaphoto }}" data-placeholder="Marca">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="modelophoto" value="{{ $sala->modelophoto }}" data-placeholder="Modelo">
                                            </td>
                                            <td>
                                                <a href="" style="display: flex; justify-content: left;">
                                                    <i class="bx bxs-file-pdf bx-md" style="color: red; font-size: 10px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input type="text" class="form-control" name="cantestrobo" value="{{ $sala->cantestrobo }}" data-placeholder="Cantidad">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="descripcionestrobo" value="{{ $sala->descripcionestrobo }}" data-placeholder="Descripcion de Estrobo">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="marcaestrobo" value="{{ $sala->marcaestrobo }}" data-placeholder="Marca">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="modeloestrobo" value="{{ $sala->modeloestrobo }}" data-placeholder="Modelo">
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


                            <button type="submit" class="btn btn-primary" id="editarsala">Guardar Registro</button>
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