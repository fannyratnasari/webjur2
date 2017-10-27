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

    @foreach($listsarpras as $sarpras)
    <div class="row" id="{{$sarpras->idhref}}">
        <div class="col s12 m6 l12">
            <div class="card reveal card-panel hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{asset('image/sarpras/'.$sarpras->foto)}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$sarpras->nama}}<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Klik untuk melihat deskripsi</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$sarpras->nama}}<i class="material-icons right">close</i></span>
                    <p>{{$sarpras->deskripsi}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection