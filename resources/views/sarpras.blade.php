@extends('layout.app')
@section('content')
<div class="row">
    <div class="col s12 ">
        <ul class="tabs normal">
            <li class="tab col s1"></li>
            <li class="tab col s2"><a href="#labsi">Lab. Sistem Informasi</a></li>
            <li class="tab col s2"><a href="#labmmk">Lab. Multimedia Kreatif</a></li>
            <li class="tab col s2"><a href="#labjarkom">Lab. Jaringan Komputer</a></li>
            <li class="tab col s2"><a href="#labrpl">Lab. Rekayasa Perangkat Lunak</a></li>
            <li class="tab col s2"><a href="#ruangbaca">Ruang Baca</a></li>
            <li class="tab col s1"></li>
        </ul>
    </div>

    <div class="row" id="labsi">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{('image/labsi.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Lab Sistem Informasi<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Lab Sistem informasi<i class="material-icons right">close</i></span>
                    <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="labmmk">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{('image/labmmk.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Lab Multimedia Kreatif<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Lab Multimedia Kreatif<i class="material-icons right">close</i></span>
                    <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="labjarkom">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{('image/labjarkom.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Lab Jaringan Komputer<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Lab Jaringan Komputer<i class="material-icons right">close</i></span>
                    <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="labrpl">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{('image/labrpl.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Lab Rekayasa Perangkat Lunak<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Lab Rekayasa Perangkat Lunak<i class="material-icons right">close</i></span>
                    <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="ruangbaca">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{('image/ruangbaca.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Ruang Baca<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Ruang Baca<i class="material-icons right">close</i></span>
                    <p>Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla Bla bla bla.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection