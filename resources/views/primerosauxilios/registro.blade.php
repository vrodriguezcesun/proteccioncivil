@extends('layouts.app',['pagina'=>'registro'])

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
                        <form method="POST" action="{{ route('primerosauxilios.store') }}">
                        @csrf
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="Numero" class="col-sm-12 pl-0 pr-0">No.Empleado</label>
                                        <input type="text" class="form-control" id="empleado" name="empleado" required>

                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="nombre" class="col-sm-12 pl-0 pr-0">Nombre's</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="apellidos" class="col-sm-12 pl-0 pr-0">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="Numero" class="col-sm-12 pl-0 pr-0">Puesto</label>
                                        <select name="Ocupation" class="form-control">
                                            <option value="" selected disabled>Selecciona un puesto</option>
                                            <option value="Cocinero">Cocinero</option>
                                            <option value="Jefe de Sala">Jefe de sala</option>
                                            <option value="Gerente">Gerente</option>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                            <option value="Te. Sistemas">Tec. Sistemas</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="Numero" class="col-sm-12 pl-0 pr-0">Sala</label>
                                        <select name="Sala" class="form-control">
                                            <option value="" selected disabled>Selecciona una Sala</option>
                                            <option value="Alameda">Alameda</option>
                                            <option value="Hipodromo">Hipodromo</option>
                                            <option value="Gerente">Gerente</option>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                            <option value="Te. Sistemas">Tec. Sistemas</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="nombre" class="col-sm-12 pl-0 pr-0">Correo</label>
                                        <input type="email" class="form-control" id="nombre" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <div class="col-sm-12 pl-0 pr-0">
                                        <label for="nombre" class="col-sm-12 pl-0 pr-0">Telefono</label>
                                        <input type="text" class="form-control" id="nombre" name="telefono" required>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Enviar Registro</button>
                        </form>
                    </div>

                </div>
            </main>
            <!-- Agrega el script de SweetAlert al final del cuerpo de la página -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
<div class="center">
    <script>
        Swal.fire({
            position: "center", // Centrar el mensaje en la página
            icon: "success",
            title: "Se ha enviado Correctamente",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
</div>
@endif
        </div>
    </div>

</div>
@endsection