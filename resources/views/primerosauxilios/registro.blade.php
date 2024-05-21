@extends('layouts.app',['pagina'=>'registro'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <main id="main">
                    <div class="card-body">
                      <br>
                      <br>
                            <div class="modal-header">
                                <h3 class="modal-title">Información General</h3>
                            </div>
                            <form method="POST" action="{{ route('registro.store') }}">
                            @csrf
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-4 col-lg-2">
                                        <label for="">No.Empleado</label>
                                        <input type="text" class="form-control" id="empleado" name="empleado" required>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-8 col-lg-6">
                                        <label for="">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-4">
                                        <label for="">Puesto</label>
                                        <select name="puesto" class="form-control">
                                            <option value="" selected disabled>Selecciona un puesto</option>
                                            <option value="Cocinero">Cocinero</option>
                                            <option value="Jefe de Sala">Jefe de sala</option>
                                            <option value="Gerente">Gerente</option>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                            <option value="Te. Sistemas">Tec. Sistemas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-4">
                                        <label for="">Sala</label>
                                        <select name="sala" class="form-control">
                                            <option value="" selected disabled>Selecciona una Sala</option>
                                            <option value="Alameda">Alameda</option>
                                            <option value="Hipodromo">Hipodromo</option>
                                            <option value="Gerente">Galerias</option>
                                            <option value="Mantenimiento">Macro Plaza</option>
                                            <option value="Te. Sistemas">Pueblo Amigo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="">Teléfono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Registro</button>
                            </form>
                    
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
</div>
@endsection
