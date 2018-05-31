@extends('layout-frontal')

@section('title', 'Style Tiles')

@section('css')
    <link href="{{ asset('css/frontal/styletile.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row styleborder">
        <div class="col-md-4 sb1">
            <h1>Style Tile</h1>
            <hr>
            <p> Aquí mostraremos los aspectos visuales de nuestro sitio web como paletas de colores, texturas, tipografía y
                logotipo sin necesidad de diseñar completamente la página.</p>
        </div>
        <div class="col-md-4 stylelogo sb1">
            <h1>Logo</h1>
            <hr>
            <img src="media/images/logo.png" alt="">
        </div>
        <div class="col-md-4 sb1">
            <h1>Web Site</h1>
            <hr>
            <h2> Monllar.com </h2>
        </div>
        <div class="col-md-6 sb1">
            <div class="row sb2">
                <div class="col-md-12 texto"><br>
                <h5>Contenido</h5>
                <br>
                <h1>Titulo</h1>
                <h2>Subtitulo 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim en eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla</p>

                <h3>Subtitulo 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim en eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla</p>

                <h4>Subtitulo 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim en eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 botones"><br>
                    <h3>Botones</h3><br>
                    <button type="button" class="btn btn-primary">Button  1</button>
                    <button type="button" class="btn btn-outline-secondary"> Button  2</button>
                    <button type="button" class="btn btn-warning"> Button 3</button>
                </div>
            </div>
        </div>

        <div class="col-md-6 sb1">
            <div class="row sb2">
               <div class="col-md-12 colores"><br>
                   <h3>Colores</h3><br>
                   <div class="color1"></div>
                   <div class="color2"></div>
                   <div class="color3"></div>
                   <div class="color4"></div>
                   <div class="txt1"> Darkgray #A9A9A9</div>
                   <div class="txt1"> Blanco #FFFFFF</div>
                   <div class="txt1"> Negro #000000</div>
                   <div class="txt1"> CornFlowerBlue #6495ED</div>
               </div>
            </div>
            <div class="row">
                <div class="col-md-12"><br>
                    <h3>Imagenes</h3>
                    <div class=" img">
                        <img src="{{asset('media/images/sudadera.jpg')}}" alt="Camiseta Hombre">
                    </div>
                    <div class="img">
                        <img src="{{asset('media/images/camiseta-skull.jpg')}}" alt="CRocksir craneo">
                    </div>
                    <div class="img">
                        <img src="{{asset('media/images/camiseta-mujer.jpg')}}" alt="Camiseta de verano mujer">
                    </div>
                    <div class="txt2"> Chaqueta de invierno Hombre </div>
                    <div class="txt2"> Rocksir cráneo</div>
                    <div class="txt2"> Camiseta de verano Mujer</div>
                    <div class="img">
                        <img src="{{asset('media/images/camiseta-mujer-top.jpg')}}" alt="Camiseta de verano Top mujer">
                    </div>
                    <div class="img">
                        <img src="{{asset('media/images/camiseta-nino-spiderman.jpg')}}" alt="Camiseta de Spiderman">
                    </div>
                    <div class="img">
                        <img src="{{asset('media/images/mameluco-bug-bunny.jpg')}}" alt="Mameluco de Bug Bunny">
                    </div>
                    <div class="txt2"> Camiseta de verano Top </div>
                    <div class="txt2"> Camiseta de Spiderman</div>
                    <div class="txt2"> Mameluco de Bug Bunny</div>
                </div>
            </div>
        </div>
    </div>

@endsection