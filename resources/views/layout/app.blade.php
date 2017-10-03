<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
</head>
<body>
<div >

    @yield('content')
</div>

<!-- Scripts -->
<script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/init.js"></script>
{{--<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>--}}
<script src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>