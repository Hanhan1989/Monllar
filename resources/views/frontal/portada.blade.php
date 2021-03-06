@extends('layout-frontal')

@section('title', 'Home Monllar')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')

    {{--Caroulssel slider imágenes grandes--}}

    <div class="row hidden-sm-down">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{asset('media/images/default.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Abrigos de primavera</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{asset('media/images/default.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Zapatos</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{asset('media/images/default.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Trajes</h1>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{--Productos--}}

        <div class="row">
            @foreach($productos as $producto)
                <div class="col-md-3 producto">
                    <div class="card md-3 box-shadow" onmouseover="anadirColorContorno(this)" onmouseleave="eliminarColorContorno(this)">
                        <img class="card-img-top" src="{{asset('media/images/'.$producto->path_imagen_1)}}" alt="Card image cap">
                        <div class="card-body">
                            <h4><a href="{{url('producto/'.$producto->id)}}">{{str_limit($producto->nombre, 23)}}</a></h4>
                            <p class="d-flex card-text">{!!  str_limit(str_replace('&nbsp;', '' ,strip_tags($producto->descripcion)), 100, '...') !!}</p>
                            <div class="text-center">
                                <div class="precio ">PRECIO
                                    <span>{{$producto->precio}} €</span>
                                </div>
                                <div class="precio_iva small">(PRECIO
                                    <span> €</span>IVA Incluido.)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- Flexslider patrocinadores --}}
      <div class="row" >
          <div class="flex-slider">
              <div class="container">
                  <h2>Patrocinadores de nuestra tienda o categorias de ropa</h2>
                  <div class="row" id="itemSlider">
                      <div id="slider-1" class="carousel carousel-by-item slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src= "{{asset('media/images/portada1.jpg')}}" alt="First slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada2.jpg')}}" alt="Second slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada3.jpg')}}" alt="Third slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada4.jpg')}}" alt="Fourth slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada5.jpg')}}" alt="Five slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada6.jpg')}}" alt="Six slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada7.jpg')}}" alt="Seven slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="{{asset('media/images/portada8.jpg')}}" alt="Eight slide">
                                  </div>
                              </div>

                          </div>
                          <a class="carousel-control-prev" href="#slider-1" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#slider-1" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/portada.js') }}"></script>
@endsection
