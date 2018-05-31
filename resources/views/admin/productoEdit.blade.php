@extends('layout-admin')

@section('title', 'Editar producto ')

@section('css')
    <link href="{{ asset('css/admin/productoCreate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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

    {!! Form::model($producto, ['method' => 'PATCH','route' => ['producto.update', $producto->id]]) !!}

    <div class="form-group">
        {!! Form::label('nombre_producto', 'Nombre del producto') !!}
        {!! Form::text('nombre', $producto->nombre, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('codigo_barras', 'Código de barras') !!}
        {!! Form::number('codigo_barras', $producto->codigo_barras, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sku', 'SKU') !!}
        {!! Form::number('sku', $producto->sku, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::textarea('descripcion', $producto->descripcion,  ['class' => 'form-control','id'=>'editor1', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('informacion_adicional', 'Información adicional') !!}
        {!! Form::textarea('informacion_adicional', $producto->informacion_adicional, ['class' => 'form-control', 'id'=>'editor2', 'required']) !!}
    </div>


    <div class="form-group">
        <label for="precio" class="control-label">Precio</label>
        <input type="number" value="{{$producto->precio}}" class="form-control" name="precio" placeholder="19.99" step="0.01">
    </div>

    <div class="form-group">
        {!! Form::label('stock', 'Unidades') !!}
        {!! Form::number('stock', $producto->stock, ['class' => 'form-control', 'required']) !!}
    </div>


    <div class="form-group">
        <label for="catalogo" class="control-label">Catalogo</label>
        <select class="form-control" id="listaCatalogos" style="height:30px">
            <option value="">seleccione una opción ...</option>
            @foreach ($data['catalogo_categorias'] as $catalogo)
                <option value="{{$catalogo->id}}">{{ $catalogo -> nombre}} </option>
            @endforeach
        </select>
    </div>

    <div  class="form-group" id="seccionCategorias"></div>

    <div class="form-group">
        <label for="atributos" class="control-label">Atributos</label><br/>
        @foreach ($atributos as $atributo)
            @if(in_array($atributo -> id, $atributosDB))
                <input type="checkbox"  value="{{$atributo -> id}}" name="atributo[]" checked> {{$atributo -> nombre}}<br>
            @else
                <input type="checkbox"  value="{{$atributo -> id}}" name="atributo[]"> {{$atributo -> nombre}}<br>
            @endif
        @endforeach
    </div>

    {{--<div class="form-group" id="columns" class="control-label" style="border: 1px ; height: 150px">--}}
        {{--<label for="cuadro_upload" class="control-label">Buscar imagenes del producto</label>--}}
        {{--<div class="desc"><span></span></div>--}}
        {{--<div id="uploads"><!-- Upload Content --></div>--}}
    {{--</div>--}}

    <div class="row">
        <div class="col-md-12">
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>

    {{ Form::close() }}

@endsection

@section('javascript')
    <script>
        var catalogos = JSON.parse('{!! $data['catalogo_categorias'] !!}');
        {{--var imagen1 = window.location.origin + "/media/images/";--}}
            {{--imagen1 += "{{$producto->path_imagen_1}}";--}}
            {{--console.log(imagen1);--}}
        {{--var imagen2 = "{{assert('media/images/'.$producto->path_imagen_2)}}";--}}
        {{--var imagen3 = "{{assert('media/images/'.$producto->path_imagen_3)}}";--}}
    </script>

    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
    <script src="{{ asset('lib/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uploadHBR.min.js') }}"></script>
    <script src="{{ asset('lib/ckeditor/ckeditor.js') }}"></script>

@endsection