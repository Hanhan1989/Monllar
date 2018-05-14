<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/admin/user_login.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Login del usuario interno (Administradores )</h1>
    <form name="example_form" action="#" method="POST">
        <label for="req">Required field:</label>
        <input name="req" id="req" />
        <div class="msg-error" id="error_campo_email"></div>

        <button class="button gray" type="submit" name="submit">Submit</button>
    </form>

    <script src="{{ asset('lib/validate.js') }}"></script>
    <script src="{{ asset('js/admin/user_login.js') }}"></script>
</body>
</html>