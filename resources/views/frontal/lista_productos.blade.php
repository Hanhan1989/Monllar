
@extends('layout-frontal')

@section('title', 'Lista de productos')

@section('css')
    <link href="{{ asset('css/frontal/lista_productos.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <h1>Lista de productos </h1>
    </div>
            @foreach ($productos as $producto)
                <div class="row" id="listar" onmouseover="anadirColorContorno(this)" onmouseleave="eliminarColorContorno(this)">
                    <div class="col-sm-5 box-shadow ">
                        <img class="img-fluid" src="{{$producto->path_imagen_1}}" alt="image">
                    </div>
                    <div class="col-sm-5">
                        <h4><a href="{{url('producto/'.$producto->id)}}">{{$producto->nombre}}</a></h4>
                        <p class="d-flex card-text">{{ str_limit($producto->descripcion, 50, '...')}}</p>
                    </div>
                    <div class="col-sm-2">
                        <h4>Precio</h4>
                        <span class="precio">{{$producto->precio}} €</span>
                    </div>

                </div>
            @endforeach

             <div class="paginacion">{{$productos->links()}}</div>
@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/lista_productos.js') }}"></script>
@endsection;


