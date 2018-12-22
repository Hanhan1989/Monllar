<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('lib/bootstrap/bootstrap.css')}}">
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
    <script src="{{ asset('lib/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('lib/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    
    @yield('javascript')
</div>
</body>
</html>
