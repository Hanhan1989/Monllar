
@extends('layout-frontal')

@section('title', 'Lista de productos')

@section('css')
    <link href="{{ asset('css/frontal/lista_productos.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h1>Lista de productos {{$id_categoria}}</h1>
@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/lista_productos.js') }}"></script>
@endsection;
