@extends('layout-frontal')

@section('title', 'producto')

@section('css')
    <link href="{{ asset('css/frontal/ficha_producto.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- <h1>ficha del producto {{$slug}}</h1>

    style="border: 1px solid black;" -->
    <div class="row">
        <div class="col-md-2">
            <img class="card-img-top mb-3" src="http://via.placeholder.com/150x150" alt="Card image cap">
            <img class="card-img-top mb-3" src="http://via.placeholder.com/150x150" alt="Card image cap">
            <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
        </div>
            <div class="col-md-5">
                <img class="card-img-top" src="http://via.placeholder.com/150x180" alt="Card image cap">
            </div>
            <div class="col-md-5">
                <h3>{{$slug}}</h3>
                <br>
                <h4>Precio : &euro;60.00 - 70.00</h4>
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



@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/ficha_producto.js') }}"></script>
@endsection;