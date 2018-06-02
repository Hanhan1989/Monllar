@extends('layout-frontal')

@section('title', 'Contacto')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')
            <div class="row">
                <div class="col-md-2">
                    <img  src="{{asset('lib/glyph-iconset/svg/si-glyph-mail.svg')}}" alt="Card image cap">
                </div>
                <div class="col-md-4"  style="padding-top:30px ">
                    <h4><strong>Email</strong></h4>
                    <li>monllar@monllar.com</li>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img  src="{{asset('lib/glyph-iconset/svg/si-glyph-call.svg')}}" alt="Card image cap">
                </div>
                <div class="col-md-4"  style="padding-top:30px ">
                    <h4><strong>Teléfono</strong></h4>
                    <li>900904567</li>
                </div>
            </div>

@endsection