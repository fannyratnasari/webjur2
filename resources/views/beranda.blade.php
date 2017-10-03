@extends('layout.app')
@section('content')

    <nav role="navigation" style="background-color: #02062c">
        <div class="nav-wrapper container">
            <img src="{{('image/ti.png')}}" height="70px" width="170px" class="brand-logo">
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Beranda</a></li>
                <li>
                    <a class="dropdown-button active" href="#!" data-activates="dropdown1">Info
                        <i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown1" class="dropdown-content active" style="width: 135.012px; position: absolute; top: 0px; left: 446.725px; display: block; opacity: 1;">
                        <li><a href="#!">Beasiswa</a></li>
                        <li><a href="#!">Kegiatan</a></li>
                    </ul>
                </li>
                <li><a href="#">Sarana dan Prasarana</a></li>
                <li><a href="#">Tentang Jurusan</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
                <li><a href="#">Beranda</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i>Info</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#">Beasiswa</a>
                                    </li>
                                    <li><a href="#">Kegiatan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Sarana dan Prasarana</a></li>
                <li><a href="#">Tentang Jurusan</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
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
        <div class="parallax"><img src="{{('image/unesa.jpg')}}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 234px, 0px);"></div>
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
                        <h2 class="center light-blue-text"><i class="material-icons medium">location_city</i></h2>
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
                <div class="col s6 ">
                    <h5 class="light header">Beasiswa PPA</h5>
                    <p class="caption">
                        Beasiswa PPA 2017 dan BPP PPA 2017 ditujukan bagi mahasiswa aktif yang berada di jenjang S1/DIV atau mahasiswa D3. Ketentuan lebih lanjut tertera di persyaratan.</p>
                    <img width="100%" src={{("image/ppa.jpg")}} alt="">
                    <br><br>
                    <a href="beasiswa" class="btn-large waves-effect waves-light" style="background-color: #2F4F4F">Baca</a>
                </div>
                <div class="col s6 ">
                    <h5 class="light header">Beasiswa BCA</h5>
                    <p class="caption">
                        Dalam upaya memajukan dunia pendidikan di Indonesia, BCA turut memberikan beasiswa kepada mahasiswa/mahasiswi berprestasi di bidangnya.</p>
                        <img width="100%" src={{("image/BCA.jpg")}} alt="">
                    <br><br>
                    <a href="http://materializecss.com/themes.html" class="btn-large waves-effect waves-light" style="background-color: #03a9f4">Baca</a>
                </div>
            </div>
        </div>
        <div id="card-stats">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/masade.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span><a href="">Penyerahan Tropi</a></span>
                                <br>
                                <span>18 Juni, 2015</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/hmj.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span><a href="">Kunjungan Kerja HMJ</a></span>
                                <br>
                                <span>20 November, 2016</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/futsal.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span><a href="">Futsal TI</a></span>
                                <br>
                                <span>15 Oktober 2016</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/dialog.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span><a href="">Dialog Jurusan</a></span>
                                <br>
                                <span>12 Februari 2017</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- blog card -->
            <div class="col s12 m12 l4">
                <div class="blog-card" >
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/bi.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span class="left"><a href="">Info</a></span>
                                <span class="right">18th June, 2015</span>
                            </p>
                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Beasiswa Bank Indonesia</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="blog-card" >
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/ppa.jpg")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span class="left"><a href="">Info</a></span>
                                <span class="right">18th June, 2015</span>
                            </p>
                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Beasiswa PPA</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="blog-card" >
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src={{("image/komatik.png")}} alt="blog-img">
                        </div>
                        <div class="card-content">
                            <p class="row">
                                <span class="left"><a href="">Info</a></span>
                                <span class="right">18th June, 2015</span>
                            </p>
                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Sosialisasi Komatik</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer orange">
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">S1 Teknik Informatika 2015</a>
            </div>
        </div>
    </footer>
@endsection


