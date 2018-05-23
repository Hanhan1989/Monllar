@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('css')
    <link href="{{ asset('css/admin/portada.css') }}" rel="stylesheet">
    <link href="{{asset('css/admin/producto.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <table class="table table">
            <thead>
                <tr>
                    <th scope="col-1">Id</th>
                    <th scope="col-2">Nombre</th>
                    <th scope="col-2">Descripción</th>
                    <th scope="col-3">Imagen</th>
                    <th scope="col-2">Created at</th>
                    <th scope="col-1">Eliminar</th>
                    <th scope="col-1">Edit</th>
                </tr>
            </thead>
            <tbody>

    @foreach($productos as $producto)
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{ str_limit($producto->descripcion, 50, '...')}}</td>
            <td><img class="card-img-top" src="{{$producto->path_imagen_1}}" alt="Card image cap"></td>
            <td>{{$producto->created_at}}</td>
            <td>{!! Form::open(['method' => 'DELETE','route' => ['producto.destroy', $producto->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
            <td>Editar</td>
        </tr>
    @endforeach
            </tbody>
        </table>
        <div class="paginacion">{{$productos->links()}}</div>
    </div>
@endsection
