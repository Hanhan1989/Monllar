<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{ asset('css/comun.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comun-admin.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="container">

    {{-- Menu --}}
    <header class="masthead mb-auto">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu-principal">
            <a class="navbar-brand" href="{{url('admin/producto')}}">MENÚ ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/producto')}}" >
                            Producto
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('admin/catalogo')}}" >
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('admin/categoria')}}">
                            Categoría
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('admin/atributo')}}">
                            Atributo
                        </a>
                    </li>
                    @if (Auth::user()->id_perfil == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/user')}}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/perfil')}}">Perfiles</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link">(Hola {{Auth::user()->name}} !)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <img class="glyph-icon" src="{{asset('lib/glyph-iconset/svg/si-glyph-sign-out.svg')}}"></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- End Menu --}}


    @yield('content')

    {{-- Pie página--}}
    <footer class="page-footer font-small indigo pt-0">
        <div class="footer-copyright py-3 text-center">
            <div class="col-12 col-md">
                <span>www.monllar.com</span>
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
        </div>
    </footer>
    {{-- End Pie página--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    @yield('javascript')
</div>
</body>
</html>
