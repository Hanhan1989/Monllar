@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')

    <a href="{{url('admin/atributo/create')}}" class="float-left btn btn-info">Crear Atributo </a><br><br>

    <table class="table table-hover table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        @foreach($atributos as $atributo)
            <tr>
                <td>{{$atributo->id}}</td>
                <td>{{$atributo->nombre}}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['atributo.destroy', $atributo->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
                <td>
                    <a href="{{url('admin/atributo/'.$atributo->id.'/edit')}}" class="btn btn-success">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
