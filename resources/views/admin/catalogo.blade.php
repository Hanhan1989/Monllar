@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')

        <div class="row">
            <div class="col-sm-12">
                <a href="{{url('admin/catalogo/create')}}" class="float-left btn btn-info">Crear Catálogo </a><br><br>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($catalogos as $catalogo)

                <tr>
                    <th>{{$catalogo->id}}</th>
                    <td>{{$catalogo->nombre}}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['catalogo.destroy', $catalogo->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td><a href="{{url('admin/catalogo/'.$catalogo->id.'/edit')}}" class="btn btn-success">Editar</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>

@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection