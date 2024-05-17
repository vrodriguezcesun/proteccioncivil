@extends('layouts.app',['pagina'=>'usuarios'])

@section('content')

<div class="row">

    <div class="col-sm-12 mt-5 ml-2" style="padding: 30px;">


        <div class="card">
            <div class="card-body">
                <main id="main" class="main">
                    <div class="mb-2">
                        <a class="btn btn-outline-primary" href="{{url('usuarios/create')}}">Nuevo</a>
                    </div>

                    <table class="table table-striped table-hover mt-2" width="100%" id="tblClients">
                        <thead class="thead">
                            <tr>
                                <th style="display: none;">ID</th>

                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td style="display: none;">{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('usuarios.edit' , $usuario->id)}}">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                </td>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </div>
</div>


@endsection