@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('css')
    <link href="{{ asset('css/admin/portada.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/categoria.css') }}" rel="stylesheet">
@endsection

@section('content')



    <a href="{{url('admin/categoria/create')}}" class="float-left btn btn-info">Crear Categoria </a><br><br>
    @foreach ($catalogos as $catalogo)
    <table class="table table-sm table-bordered table-hover">
        <thead>
        <tr>
            <th colspan="3" class="text-align-center">{{$catalogo->nombre}}</th>

        </tr>
        </thead>
        @foreach($catalogo->categorias as $categoria)
            <tbody>
            <tr>
                <td scope="row">{{$categoria->nombre}}</td>
                <td>{!! Form::open(['method' => 'DELETE','route' => ['categoria.destroy', $categoria->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                <td><a href="{{url('admin/categoria/'.$categoria->id.'/edit')}}" class="btn btn-success">Editar</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
    @endforeach


@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection
