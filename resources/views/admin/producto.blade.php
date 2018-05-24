@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('css')
    <link href="{{ asset('css/admin/portada.css') }}" rel="stylesheet">
    <link href="{{asset('css/admin/producto.css')}}" rel="stylesheet">
@endsection

@section('content')


    <div class="row">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{url('admin/producto/create')}}" class="float-left btn btn-info">Crear Producto </a><br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="row table-responsive-md">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre del producto  </th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>

    @foreach($productos as $producto)
        <tr>
            <th >{{$producto->id}}</th>
            <td >{{$producto->nombre}}</td>
            <td>{{ str_limit($producto->descripcion, 30, '...')}}</td>
            <td><img class="img" src="{{$producto->path_imagen_1}}" width="175" height="100"></td>
            <td>{{$producto->created_at->format('Y-m-d')}}</td>
            <td>{!! Form::open(['method' => 'DELETE','route' => ['producto.destroy', $producto->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
            <td><button type="button" class="btn btn-success">Editar</button></td>
        </tr>
    @endforeach
            </tbody>
        </table>
        <div class="paginacion">{{$productos->links()}}</div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection
