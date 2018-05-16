<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{ asset('css/admin/user_login.css') }}" rel="stylesheet">
</head>
<body  class="text-center">
    <form class="form-signin" name="example_form" action="#" method="POST">
        <!-- IMAGEN DE LOGIN-->
        <img class="mb-4" src="https://www.freeiconspng.com/uploads/user-login-icon-14.png" alt="login" width="100" height="100">

        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>

        <label for="email" class="sr-only">Email*</label>
        <input type="text" name="email" class="form-control" placeholder="Email"  autofocus>
        <div class="msg-error" id="error_campo_email"></div>

        <label for="password" class="sr-only">Contraseña*</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="msg-error" id="error_campo_pass"></div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label  for="input-login-remember">
            <input type="checkbox" checked="checked" name="remember"> <span>Recuérdame</span>
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
    <script src="{{ asset('lib/validate.js') }}"></script>
    <script src="{{ asset('js/admin/user_login.js') }}"></script>
</body>
</html>