@extends('layout-admin')

@section('title', 'Editar producto ')

@section('css')
    <link href="{{ asset('css/admin/productoCreate.css') }}" rel="stylesheet">
    <style>
        img{
            max-width:180px;
        }
    </style>
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Error!</strong> Los siguientes campos son necesarios.<br><br>
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($data['producto_actual'], ['method' => 'PATCH','route' => ['producto.update', $data['producto_actual']->id], 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('nombre_producto', 'Nombre del producto') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('codigo_barras', 'Código de barras') !!}
        {!! Form::number('codigo_barras', null,  ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sku', 'SKU') !!}
        {!! Form::number('sku',null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::textarea('descripcion', null,  ['class' => 'form-control','id'=>'editor1', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('informacion_adicional', 'Información adicional') !!}
        {!! Form::textarea('informacion_adicional', null, ['class' => 'form-control', 'id'=>'editor2', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Precio', 'Precio') !!}
        {!! Form::text('precio', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('stock', 'Unidades') !!}
        {!! Form::number('stock', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        <label>Catálogo</label>
        <select name="catalogo" class="form-control" id="listaCatalogos" required>
            <option value="">Seleccionar opción </option>
            @foreach($data['catalogo_categorias'] as $categoria)
                @if($data['categoria_actual']->id_catalogo === $categoria->id)
                    <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                @else
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div  class="form-group" id="seccionCategorias"></div>


    <div class="form-group">
        <label for="atributos" class="control-label">Atributos</label><br/>
        @foreach ($data['atributos'] as $atributo)
            @if(in_array($atributo->id, $array_atributos))
                <input type="checkbox" value="{{$atributo -> id}}" name="atributo[]" checked> {{$atributo -> nombre}}<br>
            @else
                <input type="checkbox" value="{{$atributo -> id}}" name="atributo[]"> {{$atributo -> nombre}}<br>
            @endif
        @endforeach
    </div>

   <div class="form-group">
       <label class="control-label">Imagen principal</label><br>
       <img id="blah0" src="{{asset('media/images/'.$data['producto_actual']->path_imagen_1)}}" alt="your image" />
       <input name="path_imagen_1" type='file' onchange="readURL(this);" id="0" />
   </div>

    <div class="form-group">
        <label class="control-label">Imagen secundaria </label><br>
        <img id="blah1" src="{{asset('media/images/'.$data['producto_actual']->path_imagen_2)}}" alt="your image" />
        <input  name="path_imagen_2" type='file' onchange="readURL(this);" id="1" />
    </div>

    <div class="form-group">
        <label class="control-label">Imagen secundaria </label><br>
        <img id="blah2" src="{{asset('media/images/'.$data['producto_actual']->path_imagen_3)}}" alt="your image" />
        <input name="path_imagen_3" type='file' onchange="readURL(this);" id="2" />
    </div>

    <br>
    <input type="submit" value="Editar producto" class="btn btn-success">

    {{ Form::close() }}

@endsection

@section('javascript')
    <script>
        var catalogos = JSON.parse('{!! $data['catalogo_categorias'] !!}');
        var imagen1 = "{{asset('media/images/'.$data['producto_actual']->path_imagen_1)}}";
        var imagen2 = "{{asset('media/images/'.$data['producto_actual']->path_imagen_2)}}";
        var imagen3 = "{{asset('media/images/'.$data['producto_actual']->path_imagen_3)}}";
        var id_categoria = "{{$data['producto_actual']->id_categoria}}";
    </script>

    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
    <script src="{{ asset('lib/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uploadHBR.min.js') }}"></script>
    <script src="{{ asset('lib/ckeditor/ckeditor.js') }}"></script>


@endsection