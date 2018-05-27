@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')

    <a href="{{url('admin/atributo/create')}}" class="float-left btn btn-info">Crear Atributo </a><br><br>

    <table class="table table-hover table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Anadir Valor</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        @foreach($atributos as $atributo)
            <tr>
                <td>{{$atributo->id}}</td>
                <td>
                    <a href="{{ route('atributovalor.create', ['id_atributo' => $atributo->id, 'nombre_atributo' => $atributo->nombre]) }}">{{ucfirst($atributo->nombre)}}</a>
                </td>
                <td>
                    <a href="{{ route('atributovalor.create', ['id_atributo' => $atributo->id, 'nombre_atributo' => $atributo->nombre]) }}" class="btn btn-info">Añadir valor del atributo</a>

                </td>
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
