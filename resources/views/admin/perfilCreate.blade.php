@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

    @if(isset($perfil_id))
        {{ Form::model($perfil, ['route' => ['perfil.update', $perfil_id], 'method' => 'patch', 'class' => 'form']) }}
    @else
        {!! Form::open(['method' => 'POST','route' => ['perfil.store'], 'class'=>'form']) !!}
    @endif

    <div class="form-group">
        <label>Nombre Rol</label>
        {{Form::text('perfil', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        <label>Descripción</label>
        {{Form::text('descripcion', null, array('class' => 'form-control')) }}
    </div>

    @if(isset($perfil_id))
        <input type="submit" value="Modificar Perfil" class="btn btn-success">
    @else
        <input type="submit" value="Añadir Perfil" class="btn btn-success">
    @endif

    {{ Form::close() }}
@endsection
