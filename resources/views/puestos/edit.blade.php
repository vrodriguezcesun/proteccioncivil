@extends('layouts.app', ['pagina' => 'puestos.edit'])

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <main id="main" class="main">
                <div class="card-body">
                    <div class="pagetitle">
                        <div class="modal-header">
                            <h3 class="modal-title" style="float: left;">Información General</h3>
                        </div>
                        <form action="{{ route('puestos.update', $puesto->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <div class="col-sm-12 pl-0 pr-0">
                                    <label for="nombre" class="col-sm-12 pl-0 pr-0">Nombre Completo</label>
                                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $puesto->nombre) }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" id="editarpuesto">Guardar Registro</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
