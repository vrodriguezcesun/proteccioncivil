@extends('layouts.app',['pagina'=>'salas'])

@section('content')


    <div class="mt-5 ml-2 p-3" style="padding: 30px;">
    
            <div class="card-body">
                <div id="main" class="main">
                    <!-- <div class="form-row">
                    <div class="mb-2">
                        <a class="btn btn-outline-primary" href="{{url('empleados/create')}}">Nuevo</a>

                    </div>
                        <div class="col-sm-8 my-1">
                            <input type="text" class="form-control" name="texto">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-outline-primary ml-auto my-1" value="Buscar">
                        </div>
                    </div> -->
                    <div class="mb-2">
                        <a class="btn btn-outline-primary" href="{{url('salas/create')}}">Nuevo</a>

                    </div>
                   <!--  <form action="{{ route('empleados.index') }}" method="get">
                        <div class="form-row">

                            <div class="col-sm-8 my-1">
                                <input type="text" class="form-control" name="texto">
                            </div>
                            <div class="col-auto">
                                <input type="submit" class="btn btn-outline-primary ml-auto my-1" value="Buscar">
                            </div>
                        </div>
                    </form> -->
                    <div class="table-responsive">
                    <table id="buscar" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="display: none;">ID</th>
                                    <th>Nombre de La sala</th>
                                    <th>Direccion</th>
                                    <th>RFC</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($salas as $sala)
                                <tr>
                                    <td style="display: none;">{{$sala->id}}</td>
                                    <td>{{$sala->nombre}}</td>
                                    <td>{{$sala->direccion}}</td>
                                    <td>{{$sala->rfc}}</td>
                                    <td>
                                        <a class="btn btn-success" href="#"><i class='bx bx-low-vision'></i></a>
                                        <a class="btn btn-info" href="{{route('salas.edit' , $sala->id)}}"><i class='bx bx-edit'></i></a>
                                        <form id="eliminar-{{ $sala->id }}" action="{{ route('salas.destroy', $sala->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-button"><i class='bx bx-user-minus'></i></button>
                                        </form>
                                    </td>                                

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    <div class="d-flex justify-content-center">
                        {!! $salas->links() !!}
                    </div>
                </div>
            </div>

    </div>




@endsection