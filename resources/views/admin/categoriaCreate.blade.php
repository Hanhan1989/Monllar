@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

            @if(isset($categoria->id))

                {{ Form::model($categoria, ['route' => ['categoria.update', $categoria_id], 'method' => 'patch', 'class' => 'form']) }}

            @else
                {!! Form::open(['method' => 'POST','route' => ['categoria.store'], 'class'=>'form']) !!}
            @endif


        <label>Catalogo</label>
        <select name="id_catalogo" required="required">
            @foreach($catalogos as $catalogo)

                @if(isset($categoria->id)&& $catalogo->id == $categoria->id_catalogo)
                    <option selected value="{{$catalogo->id}}">{{$catalogo->nombre}}</option>
                @else
                <option  value="{{$catalogo->id}}">{{$catalogo->nombre}}</option>
                @endif
            @endforeach

        </select>


        <label>Nombre Categoría</label>



    {{Form::text('nombre', null, array('class' => 'form-control', 'required'=>'required')) }}<br>
            @if(isset($categoria_id))
                <input type="submit" value="Modificar Categoría" class="btn btn-success">
            @else
                <input type="submit" value="Añadir Categoría" class="btn btn-success">
            @endif


    {{ Form::close() }}
@endsection
