@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')

        <div class="row">
            <div class="col-sm-12">
                <a href="{{url('admin/catalogo/create')}}" class="float-right btn btn-info">Crear Catálogo </a><br><br>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Eliminar</td>
                <td>Editar</td>
            </tr>
            @foreach($catalogos as $catalogo)

                <tr>
                    <td>{{$catalogo->id}}</td>
                    <td>{{$catalogo->nombre}}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['catalogo.destroy', $catalogo->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td><a href="{{url('admin/catalogo/'.$catalogo->id.'/edit')}}" class="btn btn-success">Editar</a></td>
                </tr>

            @endforeach
        </table>

@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection