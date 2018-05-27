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
        </tr>
        @foreach($atributosValor as $atributo)
            <tr>
                <td>{{$atributo->id}}</td>
                <td>{{$atributo->valor}}</td>
            </tr>
        @endforeach

    </table>

@endsection
