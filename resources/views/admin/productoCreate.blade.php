@extends('layout-admin')

@section('title', 'Crear producto ')

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
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('admin/producto')}}" method="POST" enctype="multipart/form-data">
                @method('POST')
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nombre_producto" class="control-label">Nombre del producto</label>
                    <input required type="text" class="form-control" id="full_name_id" name="nombre" placeholder="Pantalón"
                           autofocus>
                </div>

                <div class="form-group">
                    <label for="codigo-barras" class="control-label">Código de barras</label>
                    <input type="number" class="form-control" name="codigo_barras" required>
                </div>

                <div class="form-group">
                    <label for="sku" class="control-label">SKU</label>
                    <input type="number" class="form-control"  name="sku" required>
                </div>

                <div class="form-group">
                    <label for="descripcion-producto" class="control-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="editor1" rows="10" cols="80" required></textarea>
                </div>

                <div class="form-group">
                    <label for=" informacion_adicional" class="control-label">Información adicional</label>
                    <textarea type="text" class="form-control" name="informacion_adicional" id="editor2" rows="10" cols="80" required></textarea>
                </div>


                <div class="form-group">
                    <label for="precio" class="control-label">Precio</label>
                    <input type="number" class="form-control" name="precio" placeholder="19.99" step="0.01">
                </div>

                <div class="form-group">
                    <label for="unidades" class="control-label">Unidades</label>
                    <input type="number" class="form-control" name="stock" placeholder="20">
                </div>

                <div class="form-group">
                    <label for="catalogo" class="control-label">Catalogo</label>
                    <select required class="form-control" id="listaCatalogos" style="height:30px">
                        <option value="">seleccione una opción ...</option>
                        @foreach ($data['catalogo_categorias'] as $catalogo)
                        <option value="{{$catalogo->id}}"> {{$catalogo -> nombre}}</option>
                    @endforeach
                    </select>
                </div>
                <div  class="form-group" id="seccionCategorias"></div>

                <div class="form-group">
                    <label for="atributos" class="control-label">Atributos</label><br/>
                    @foreach ($atributos as $atributo)
                        <input type="checkbox"  value="{{$atributo -> id}}" name="atributo[]"> {{$atributo -> nombre}}<br>
                    @endforeach

                </div>

                <div class="form-group" id="columns" class="control-label" style="border: 1px ; height: 150px">
                    <label for="cuadro_upload" class="control-label">Buscar imagenes del producto</label>
                    <div class="desc"><span></span></div>
                    <div id="uploads"><!-- Upload Content --></div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('javascript')
    <script>
        var catalogos = JSON.parse('{!! $data['catalogo_categorias'] !!}');
        var id_categoria = "";
    </script>

    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
    <script src="{{ asset('lib/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uploadHBR.min.js') }}"></script>
    <script src="{{ asset('lib/ckeditor/ckeditor.js') }}"></script>

@endsection