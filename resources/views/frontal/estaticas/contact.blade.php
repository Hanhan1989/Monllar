@extends('layout-frontal')

@section('title', 'Contacto')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img  src="{{asset('lib/glyph-iconset/svg/si-glyph-mail.svg')}}" alt="Card image cap"> <strong>Email</strong>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <h4>Email</h4>
                            <ul>
                                <li>atencion@monllar.com</li>
                                <li>info@monllar.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img  style="height: 40px" src="{{asset('lib/glyph-iconset/svg/si-glyph-call.svg')}}" alt="Card image cap"> <strong>Teléfono</strong>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <h4>Telefono</h4>
                            <ul>
                                <li>989334569</li>
                                <li>602321124</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img style="height: 40px" src="{{asset('lib/glyph-iconset/svg/si-glyph-global.svg')}}" alt="Card image cap"> <strong> Redes sociales</strong>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <h4>Redes sociales</h4>
                            <ul>
                                <li>Facebook: Monllar</li>
                                <li>Twitter: @monllar</li>
                                <li>Instagram: @Monllar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endsection