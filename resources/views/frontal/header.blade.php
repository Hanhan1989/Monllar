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
            <a class="blog-header-logo text-dark" href="{{url('/')}}">Monllar</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="{{url('login')}}">Login Admin <img class="glyph-icon" src="{{asset('lib/glyph-iconset/svg/si-glyph-sign-in.svg')}}"></a>
        </div>
    </div>
</header>