@extends('layouts.app',['pagina'=>'create'])

@section('content')

<div class="row">

    <div class="col-sm-12 mt-5 ml-2" style="padding: 30px;">




        <div class="card">
            <div class="card-body">
            <div class="pagetitle">
                <main id="main" class="main">

                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido_materno">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>



                        <button type="submit" class="btn btn-primary">Crear Usuario</button>
                    </form>
            </div>
        </div>
        </div>
        </main>
    </div>
</div>
</div>
</div>


@endsection