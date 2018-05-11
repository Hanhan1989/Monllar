@extends('layout-frontal')

@section('title', 'producto')

@section('css')
    <link href="{{ asset('css/frontal/ficha_producto.css') }}" rel="stylesheet">
@endsection

@section('content')

    <h1>ficha del producto {{$slug}}</h1>

@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/ficha_producto.js') }}"></script>
@endsection;