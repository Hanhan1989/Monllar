@extends('layout-frontal')

@section('title', 'producto')

@section('css')
    <link href="{{ asset('css/frontal/ficha_producto.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

    <div class="col-sm-7 d-md-none d-sm-block">
        <img class="img-fluid" src="{{asset('media/images/'.$producto->path_imagen_1)}}">
    </div>

    <div class="row bzoom_wrap" >

        <ul class="col-md-8 align-content-center d-sm-none d-none d-md-block d-lg-block" id="bzoom">
            <li>
                <img class="bzoom_thumb_image" src="{{asset('media/images/'.$producto->path_imagen_1)}}" title="first img"/>
                <img class="bzoom_big_image" src="{{asset('media/images/'.$producto->path_imagen_1)}}"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="{{asset('media/images/'.$producto->path_imagen_2)}}"/>
                <img class="bzoom_big_image" src="{{asset('media/images/'.$producto->path_imagen_2)}}"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="{{asset('media/images/'.$producto->path_imagen_3)}}"/>
                <img class="bzoom_big_image" src="{{asset('media/images/'.$producto->path_imagen_3)}}"/>
            </li>

        </ul>

        <div class="col-md-4">
            <h3>{{ ucfirst($producto->nombre) }}</h3>
            <a href="javascript:print();" data-track-event-label="Print-Shelving-metal-point-2-colors-" data-track-event-category="Product-detail"><i class="fa fa-print" style="font-size:20px">Imprimir</i></a>

            <br>
            <h4>Precio : <span class="precio">{{$producto->precio}} €</span></h4>

            <div id="atributos">
                @php
                    $atributo_id = "";
                @endphp

                @foreach($atributos as $atributo)
                    @if($atributo->id_atributo != $atributo_id)
                        <h5>{{ucfirst($atributo->nombre)}} </h5>
                        @php
                            $atributo_id = $atributo->id_atributo;
                        @endphp
                    @endif
                    <span class="border">{{ucfirst($atributo->valor)}}</span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row" id="tabs">
        <div class="col-xs-6">

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#homeTab" data-toggle="tab">Descripción del producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactTab" data-toggle="tab">Información adicional</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="homeTab" class="tab-pane active">
                    <br>
                    <p>{!! $producto->descripcion !!}</p>
                </div>
                <div id="contactTab" class="tab-pane">
                    <br>
                    <p>{!! $producto->informacion_adicional !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/frontal/jqzoom.js') }}"></script>
    <script src="{{ asset('js/frontal/ficha_producto.js') }}"></script>
    <script type="text/javascript">
        $("#bzoom").zoom({
            // the width/height of the thumbnails
            thumb_image_width: 575,
            thumb_image_height: 300,
            // the width/height of the zoomed image
            source_image_width: 2000,
            source_image_height: 900,
            zoom_area_width: 500,
            zoom_area_distance: 10,
            autoplay_interval: 3000,
            autoplay: false
        });
    </script>
@endsection
