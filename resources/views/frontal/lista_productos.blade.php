
@extends('layout-frontal')

@section('title', 'Lista de productos')

@section('css')
    <link href="{{ asset('css/frontal/lista_productos.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h1>Lista de productos </h1>
        <ul>
            @foreach ($productos as $producto)
                <li>{{$producto->nombre}} | {{$producto->path_imagen_1}} | {{$producto->descripcion}} | {{$producto->precio}} </li>
            @endforeach
        </ul>
    {{$productos->links()}}
@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/lista_productos.js') }}"></script>
@endsection;
