<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="UTF-8">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{ asset('css/comun.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comun-frontal.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="container">

    {{-- Header slogan --}}
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">

                    <a href="#myModal" role="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal">Subscribirse</a>

                </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Subscripción</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="modal-body">
                            <form class="form-signin" name="example_form" action="" method="POST">
                                <h1 class="h3 mb-3 font-weight-normal">Email</h1>

                                <label for="email" class="sr-only">Email*</label>
                                <input type="text" name="email" class="form-control" placeholder="Email"  autofocus>
                                <div class="msg-error" id="error_campo_email"></div>


                                <label  for="input-login-remember">
                                    <input type="checkbox" checked="checked" required name="remember"> <span> <a data-toggle="modal" href="{{url('politica_de_privacidad')}}">Acepto la política de privacidad</a></span>
                                </label>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Monllar</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="">Crear cuenta</a>
                &nbsp;&nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="{{url('user/login')}}">Mi Cuenta</a>
            </div>
        </div>
    </header>

    {{-- End Header --}}

    {{-- Menu --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-principal">
        <a class="navbar-brand" href="#">Menú</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MUJER
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HOMBRE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ZAPATOS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JOYERÍA Y RELOJES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MARCAS</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
            </form>
        </div>
    </nav>

    {{-- End Menu --}}

    @yield('content')

    {{-- Pie página--}}

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Sobre nosotros</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">¿Cómo comprar?</a></li>
                    <li><a class="text-muted" href="#">Mapa del sitio</a></li>
                    <li><a class="text-muted" href="#">Instrucciones de montaje</a></li>
                    <li><a class="text-muted" href="#">Plazos de entrega</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Envíos</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Condiciones de venta</a></li>
                    <li><a class="text-muted" href="#">Dónde estamos ?</a></li>
                    <li><a class="text-muted" href="#"> por qué Monllar?</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Información</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cómo develver un pedido</a></li>
                    <li><a class="text-muted" href="#">Preguntas frecuentes</a></li>
                    <li><a class="text-muted" href="#">Regalo</a></li>
                    <li><a class="text-muted" href="#">Targeta de socio</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Sobre nosotros</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>


    {{-- End Pie página--}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/validate.js') }}"></script>
    <script src="{{ asset('js/frontal/layout-frontal.js') }}"></script>

    @yield('javascript')

</div>
</body>
</html>
