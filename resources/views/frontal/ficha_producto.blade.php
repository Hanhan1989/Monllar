@extends('layout-frontal')

@section('title', 'producto')

@section('css')
    <link href="{{ asset('css/frontal/ficha_producto.css') }}" rel="stylesheet">
@endsection



@section('content')

    <div class="row bzoom_wrap" >
        <ul class="col-md-7" id="bzoom">
            <li>
                <img class=" bzoom_thumb_image" src="https://www.ofertitas.es/wp-content/uploads/2016/05/zavvi-promocion-camiseta-pantalon-corto-mayo-2016.jpg" title="first img"/>
                <img class=" bzoom_big_image" src="https://www.ofertitas.es/wp-content/uploads/2016/05/zavvi-promocion-camiseta-pantalon-corto-mayo-2016.jpg"/>
            </li>
            <li>
                <img class=" bzoom_thumb_image" src="https://www.elcorteingles.es/sgfm/SGFM/contents/images/uploads/2018/03/5ab8b29196cab0fc4f408525.jpg"/>
                <img class=" bzoom_big_image" src="https://www.elcorteingles.es/sgfm/SGFM/contents/images/uploads/2018/03/5ab8b29196cab0fc4f408525.jpg"/>
            </li>
            <li >
                <img class=" bzoom_thumb_image" src="https://www.ofertitas.es/wp-content/uploads/2017/01/tommy-hilfiger-organic-cotton-camiseta-casual-barata.jpg?w=640"/>
                <img class=" bzoom_big_image" src="https://www.ofertitas.es/wp-content/uploads/2017/01/tommy-hilfiger-organic-cotton-camiseta-casual-barata.jpg?w=640"/>
            </li>

        </ul>

        <div class="col-md-5">
            <h3>{{$slug}}</h3>
            <br>
            <h4>Precio : &euro;79.00 - 90.00</h4>
            <br>
            <h5>Tamaño : </h5>
            <select class="selectpicker show-tick form-control col-md-6">
                <option> S </option>
                <option> M </option>
                <option> L </option>
                <option> XL </option>
                <option> XXL </option>
                <option> XXXL </option>
            </select>
            <br>
            <h5>Color : </h5>
            <select class="selectpicker show-tick form-control col-md-6">
                <option> Blanco </option>
                <option> Negro </option>
                <option> Rosa </option>
                <option> Azul </option>
            </select>
            <br>
            <h5>Cantidad : </h5>
            <div class="input-group " id="spinner">
                <span class="input-group-btn btn-group-md">
                    <button type="button" class="btn btn-danger" data-action="decrement"><span class="fa fa-minus">-</span></button>
                </span>
                <input name="qty" type="text" class="form-control text-center col-md-5" value="1" min="1" max="10"  >
                <span class="input-group-btn btn-group-md">
                    <button type="button" class="btn btn-success" data-action="increment"><span class="fa fa-plus">+</span></button>
                </span>
            </div>
            <br>
            <a href="#" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-edit"></span> Comprar ahora</a>
            <a href="#" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Añadir a cesta</a>
        </div>
    </div>

@section('javascript')
    <script src="{{ asset('js/frontal/ficha_producto.js') }}"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/frontal/jqzoom.js') }}"></script>
    <script type="text/javascript">
        $("#bzoom").zoom({
            // the width/height of the thumbnails
            thumb_image_width: 600,
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
@endsection;

@endsection

