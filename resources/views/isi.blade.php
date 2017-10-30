@extends('layout.app')
@section('content')
            <div class="container">
                <div class="section">
                    <h5>{{$info->judul}}</h5>
                    <div class="divider"></div><br>
                </div>
                <img src="{{ asset('image/beasiswa/'.$info->foto)}}" width="1000" height="600"/>
                <p style="text-align: justify">
                    {{--Pedoman Beasiswa Peningkatan Prestasi Akademik (PPA) Tahun 2017<br><br>--}}
                    {{--Yth. Pimpinan Perguruan Tinggi<br>--}}
                    {{--di Seluruh Indonesia<br><br>--}}
                    {{--Bersama ini kami sampaikan bahwa  Direktorat Jenderal Pembelajaran dan Kemahasiswaan menyampaikan Pedoman Beasiswa Peningkatan Prestasi Akademik (PPA) tahun 2017 untuk menjadi bahan panduan bagi Perguruan Tinggi dalam memberikan beasiswa kepada mahasiswa yang mempunyai prestasi tinggi, baik kurikuler maupun ekstrakurikuler. Program beasiswa Peningkatan Prestasi Akademik (PPA) diharapkan dapat dilaksanakan sesuai dengan prinsip 3T, yaitu: Tepat Sasaran, Tepat Jumlah, dan Tepat Waktu.<br>--}}
                    {{--Demikian kami sampaikan, atas perhatian dan kerjasamanya diucapkan terimakasih.<br><br>--}}
                    {{--Direktur Kemahasiswaan<br>--}}
                    {{--TTD<br><br><br>--}}
                    {{--Didin Wahidin<br>--}}
                    {{--Tembusan:--}}
                    {{--Direktur Jenderal Pembelajaran dan Kemahasiswaan--}}
                    {{$info->deskripsi}}
                </p>
                <br><br>
            </div>

@endsection