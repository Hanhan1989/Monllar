@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

    <h1>{{$nombre_atributo}}</h1>

    {!! Form::open(['method' => 'POST','route' => ['atributovalor.store'], 'class'=>'form']) !!}
    <div class="form-group">
        <label>Nombre</label>
        {{Form::text('valor', null, array('class' => 'form-control')) }}
    </div>
    {{Form::hidden('id_atributo', $id_atributo) }}
    {{Form::hidden('nombre_atributo', $nombre_atributo) }}
    <div class="form-group">
        <input type="submit" value="Añadir valors del Atributo" class="btn btn-success">
    </div>
    {{ Form::close() }}


    <table class="table table-bordered table-hover">
        <caption>*** Valores del atributo {{$nombre_atributo}}</caption>
        <tr>
            <th>Id</th>
            <th>Valor</th>
            <th>Eliminar</th>
        </tr>
        @foreach($atributosValor as $atributovalor)
            <tr>
                <td>{{$atributovalor->id}}</td>
                <td>{{$atributovalor->valor}}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['atributovalor.destroy', $atributovalor->id],'style'=>'display:inline']) !!}
                    {{Form::hidden('id_atributo', $id_atributo) }}
                    {{Form::hidden('nombre_atributo', $nombre_atributo) }}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>

@endsection
