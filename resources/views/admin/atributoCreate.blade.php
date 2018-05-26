@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

    <h1>Atributo</h1>

    @if(isset($atributo_id))
        {{ Form::model($atributo, ['route' => ['atributo.update', $atributo_id], 'method' => 'patch', 'class' => 'form']) }}
    @else
        {!! Form::open(['method' => 'POST','route' => ['atributo.store'], 'class'=>'form']) !!}
    @endif

    <div class="form-group">
        <label>Nombre</label>
        {{Form::text('nombre', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        <label>Descripcion </label>
        {{Form::text('descripcion', null, array('class' => 'form-control')) }}
    </div>

    @if(isset($atributo_id))
        <input type="submit" value="Modificar Atributo" class="btn btn-success">
    @else
        <input type="submit" value="Añadir Atributo" class="btn btn-success">
    @endif

    {{ Form::close() }}
@endsection
