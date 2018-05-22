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
            {{--<div class="col-md-12 text-center">--}}
            <form role="form" action="#" method="post" enctype="multipart/form-data">
                {{--<div class="row">--}}
                <div class="form-group">
                    <label for="nombre_producto" class="control-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="full_name_id" name="full_name"
                           placeholder="pantalon" autofocus>
                </div>
                <div class="form-group" id="columns">
                    <label for="nombre_producto" class="control-label">Buscar imagenes del producto o arrastra las imagen</label>
                    <div class="desc"><span></span></div>
                    <div id="uploads"><!-- Upload Content --></div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

                {{--<div class="col-xs-12 col-md-12">--}}
                    {{--<div class="col-md-12 col-lg-12 col-xs-12" id="columns">--}}
                        {{--<p>Busca imagenes producto</p>--}}
                        {{--<div class="desc"><span>o arrastra las imagen</span></div>--}}
                        {{--<div id="uploads"><!-- Upload Content --></div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<button class="btn btn-primary btn-lg pull-right" type="submit" ><i class="fa fa-upload"></i> Upload </button>--}}
                {{--</div>--}}

                {{--</div>--}}
            </form>
            {{--</div>--}}
        </div>
    </div>


@endsection

@section('javascript')
    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
    <script src="{{ asset('lib/modernizr.min.js') }}"></script>
    <script src="{{ asset('lib/uploadHBR.min.js') }}"></script>

    {{--<script src="https://code.jquery.com/jquery-2.2.1.js"></script>--}}
    {{--<script>--}}
    {{--$(document).ready(function () {--}}
    {{--uploadHBR.init({--}}
    {{--"target": "#uploads",--}}
    {{--"max": 3,--}}
    {{--"textNew": "ADD",--}}
    {{--"textTitle": "Click here or drag to upload an imagem",--}}
    {{--"textTitleRemove": "Click here remove the imagem"--}}
    {{--});--}}
    {{--$('#reset').click(function () {--}}
    {{--uploadHBR.reset('#uploads');--}}
    {{--});--}}
    {{--});--}}

    {{--</script>--}}
@endsection