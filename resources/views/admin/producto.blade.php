@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('css')
    <link href="{{ asset('css/admin/portada.css') }}" rel="stylesheet">
    <link href="{{asset('css/admin/producto.css')}}" rel="stylesheet">
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <a href="{{url('admin/producto/create')}}" class="float-left btn btn-info">Crear Producto </a><br><br>

    <div class="row table-responsive-md tabla">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">SKU</th>
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
            <th>{{$producto->sku}}</th>
            <td style="width: 200px" ><a target="_blank" href="{{url('producto/'.$producto->id)}}">{{$producto->nombre}}</a></td>
            <td style="width: 250px">{!! str_limit($producto->descripcion, 100, '...') !!}</td>
            <td><img class="img" src="{{asset('media/images/'.$producto->path_imagen_1)}}" width="175" height="100"></td>
            <td>{{$producto->created_at->format('Y-m-d')}}</td>
            <td>{!! Form::open(['method' => 'DELETE','route' => ['producto.destroy', $producto->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
            <td>  <a class="btn btn-primary" href="{{ route('producto.edit',$producto->id) }}">Editar</a></td>
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
