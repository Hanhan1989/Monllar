@extends('layout-admin')

@section('title', 'Crear producto ')

@section('css')
    <link href="{{ asset('css/admin/productoCreate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{--<div class="col-md-12 text-center"> --}}
            <form action="{{url('admin/producto')}}" method="POST" enctype="multipart/form-data">
                @method('POST')
                {{ csrf_field() }}

                {{--<div class="row">--}}
                <div class="form-group">
                    <label for="nombre_producto" class="control-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="full_name_id" name="nombre" placeholder="pantalon"
                           autofocus>
                </div>
                <div class="form-group" id="columns">
                <label for="cuadro_upload" class="control-label">Buscar imagenes del producto o arrastra las imagen</label>
                <div class="desc"><span></span></div>
                <div id="uploads"><!-- Upload Content --></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>
            {{--</div>--}}
        </div>
    </div>


@endsection

@section('javascript')
    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
    <script src="{{ asset('lib/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uploadHBR.min.js') }}"></script>
@endsection