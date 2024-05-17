@extends('layouts.app',['pagina'=>'puestos'])

@section('content')


<div class="mt-5 ml-2 p-3" style="padding: 30px;">

    <div class="card-body">
        <div id="main" class="main">

            <div class="mb-2">
                <a class="btn btn-outline-primary" href="{{url('puestos/create')}}">Nuevo</a>

            </div>

            <div class="table-responsive">
                <table id="buscar" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="display: none;">ID</th>
                            <th>Nombre del Puesto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($puestos as $puesto)
                        <tr>
                            <td style="display: none;">{{$puesto->id}}</td>
                            <td>{{$puesto->nombre}}</td>
                            <td>
                                        <a class="btn btn-success" href="#"><i class='bx bx-low-vision'></i></a>
                                        <a class="btn btn-info" href="{{route('puestos.edit' , $puesto->id)}}"><i class='bx bx-edit'></i></a>
                                        <form id="eliminar-{{ $puesto->id }}" action="{{ route('puestos.destroy', $puesto->id) }}" method="post" style="display: inline;">
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
                {!! $puestos->links() !!}
            </div>
        </div>
    </div>

</div>




@endsection