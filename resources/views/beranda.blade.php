@extends('layout.app')
@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <br>
                <h1 class="header center" style="color: #ffffff;">JURUSAN TEKNIK INFORMATIKA</h1>
                <div class="row center">
                    <h5 class="header col s10 light" style="color: #ffffff">Universitas Negeri Surabaya</h5>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ asset('image/unesa.jpg') }}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 234px, 0px);"></div>
    </div>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons medium">school</i></h2>
                        <h5 class="center">Info</h5>

                        <p class="light">Temukan berbagai info mengenai akademik dan non akademik. Segala bentuk kerjasama mengenai Beasiswa serta kegiatan jurusan terdapat disini.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center ligh  t-blue-text"><i class="material-icons medium">location_city</i></h2>
                        <h5 class="center">Sarana dan Prasana</h5>

                        <p class="light">Jurusan Teknik Informatika memiliki berbagai saran dan prasarana yang memadai. Lihat segala fasilitas yang dapat anda nikmati di Jurusan Teknik Informatika Unesa</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons medium">assignment</i></h2>
                        <h5 class="center">Tentang Jurusan</h5>

                        <p class="light">Temukan segala hal yang berkaitan mengenai jurusan maupun birokrasinya disini.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="section">
            <div class="row center">
                @foreach($listinfo as $info)
                <div class="col s6 ">
                    <a style="font-size: 25px" href="{{route('info.detail',['id' => $info->id])}}" class="light header">{{$info->judul}}</a>
                    <p class="caption">{{str_limit($info->deskripsi,100,'...')}}</p>
                    <a href="{{route('info.detail',['id' => $info->id])}}"><img width="100%" src="{{ asset('image/beasiswa/'.$info->foto)}}"></a>
                    <br><br>
                    {{--<a href="{{route('detailinfo',['id' => $info->id])}}" class="btn-large waves-effect waves-light orange">Baca</a>--}}
                </div>
                    @endforeach
            </div>
        </div>
        <div id="card-stats">
            <div class="row">
                @foreach($listkegiatan as $kegiatan)
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="{{route('info.detail',['id' => $kegiatan->id])}}"><img src="{{ asset('image/info/'.$kegiatan->foto)}}" alt="blog-img"></a>
                                {{--<img src={{ asset("image/info/.$kegiatan->foto") }} alt="blog-img">--}}
                            </div>
                            <div class="card-content">
                                <p class="row">
                                    <span><a href="{{route('info.detail',['id' => $kegiatan->id])}}">{{$kegiatan->judul}}</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            @foreach($listbeasiswa as $beasiswa)
            <div class="col s12 m12 l4">
                <div class="blog-card" >
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="{{route('info.detail',['id' => $beasiswa->id])}}"><img src="{{ asset('image/beasiswa/'.$beasiswa->foto)}}" alt="blog-img"></a>
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span class="left"><a href="">Info</a></span>
                                {{--<span class="right">18th June, 2015</span>--}}
                            </p>
                            <h4 class="card-title grey-text text-darken-4"><a href="{{route('info.detail',['id' => $beasiswa->id])}}" class="grey-text text-darken-4">{{$beasiswa->judul}}</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection