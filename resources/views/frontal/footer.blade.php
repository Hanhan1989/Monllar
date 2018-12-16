<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            <a href="{{url('/styletile')}}">Style Tile</a>
        </div>
        <div class="col-6 col-md">
            <h5>Envíos</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{url('/ubicacion')}}">Dónde estamos ?</a></li>
                <li><a class="text-muted" href="{{url('/conocenos')}}">Que somos?</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Información</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{url('/terms')}}">términos y condiciones de uso</a></li>
                <li><a class="text-muted" href="{{url('/contact')}}">Contacto</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Sobre nosotros</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{url('/team')}}">Team</a></li>
                <li><a class="text-muted" href="{{url('/politica_de_privacidad')}}">Privacy</a></li>

            </ul>
        </div>
    </div>
</footer>

<script>
    // TODO para la producción borrar este código
    var imagenes = document.querySelectorAll('img');
    imagenes.forEach(function(imagen){
        var src = imagen.src;
        if(src.includes('https')){
            imagen.src = src.replace('http://' + window.location.host + '/media/images/', '');
        }
    });
</script>