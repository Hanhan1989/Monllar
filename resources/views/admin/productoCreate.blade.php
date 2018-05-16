@extends('layout-admin')

@section('title', 'Crear producto ')

@section('css')
    <link href="{{ asset('css/admin/productoCreate.css') }}" rel="stylesheet">
@endsection

@section('content')
    Formulario del producto
@endsection

@section('javascript')
    <script src="{{ asset('js/admin/producto_create.js') }}"></script>
@endsection