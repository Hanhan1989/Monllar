@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

   @if(isset($catalogo_id))
       {{ Form::model($catalogo, ['route' => ['catalogo.update', $catalogo_id], 'method' => 'patch', 'class' => 'form']) }}
   @else
       {!! Form::open(['method' => 'POST','route' => ['catalogo.store'], 'class'=>'form']) !!}
   @endif

   <div class="form-group">
       <label>Nombre Categoría</label>
       {{Form::text('nombre', null, array('class' => 'form-control')) }}

   </div>

   @if(isset($catalogo_id))
       <input type="submit" value="Modificar Categoría" class="btn btn-success">
   @else
       <input type="submit" value="Añadir Categoría" class="btn btn-success">
   @endif

   {{ Form::close() }}
@endsection
