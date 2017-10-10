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
<head>
<body>
<div>
        <nav role="navigation" style="background-color: #02062c">
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <div class="nav-wrapper">
                <img src="{{ asset('image/ti.png') }}" height="70px" width="170px" class="brand-logo">
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ route('webjur.beranda') }}">Beranda</a></li>
                    <li><a class="dropdown-button" href="" data-activates="dropdown1">Info<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="{{ route('webjur.beasiswa') }}">Beasiswa</a></li>
                            <li><a href="{{ route('webjur.kegiatan') }}">Kegiatan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('webjur.sarpras') }}">Sarana dan Prasarana</a></li>
                    <li><a href="#">Tentang Jurusan</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{ route('webjur.beranda') }}">Beranda</a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                            class="mdi-action-view-carousel"></i>Info</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{ route('webjur.beasiswa') }}">Beasiswa</a>
                                        </li>
                                        <li><a href="{{ route('webjur.kegiatan') }}">Kegiatan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('webjur.sarpras') }}">Sarana dan Prasarana</a></li>
                    <li><a href="#">Tentang Jurusan</a></li>
                </ul>

            </div>
        </nav>

</div>

    @yield('content')

    <footer class="page-footer orange">
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" href="">S1 Teknik Informatika 2015</a>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(".button-collapse").sideNav();
</script>
{{--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>--}}
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>

</body>
</html>