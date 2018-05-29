    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-principal">
        <a class="navbar-brand" href="{{url('/')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                @foreach ($catalogos as $catalogo)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$catalogo->nombre}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($catalogo->categorias as $categoria)
                                <a class="dropdown-item" href="{{url('producto/lista/'.$categoria->id)}}">{{$categoria->nombre}}</a>
                            @endforeach
                        </div>
                    </li>
                @endforeach

            </ul>
            <form class="form-group my-2 my-lg-0 col-md-6">
                <input class="form-control" id="search" type="search" placeholder="Buscar producto" aria-label="Search">
            </form>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
        </div>
    </nav>


<div id="productosBuscador"></div>
