<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('lib/bootstrap/bootstrap.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('css/comun.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comun-frontal.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="container">

    {{-- Header slogan --}}
        @include('frontal.header')
    {{-- End Header --}}

    {{-- Menu --}}
        @include('frontal.menu')
    {{-- End Menu --}}

    @yield('content')

    {{-- Pie página--}}
        @include('frontal.footer')
    {{-- End Pie página--}}

    <script src="{{ asset('lib/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('lib/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/validate.js') }}"></script>
    <script src="{{ asset('js/frontal/layout-frontal.js') }}"></script>

    @yield('javascript')

</div>
</body>
</html>
