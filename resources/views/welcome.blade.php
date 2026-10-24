@extends('layouts.frame')

@section('content')
    <style>
        .logo {
            vertical-align: middle;
            width: 90px;
            height: auto;
        }

        .jumbotron {
            background-image: linear-gradient(rgba(40, 120, 235, 0.9), rgba(40, 120, 235, 0.9)), url('{{ asset('/website/resources/img/headerpic.jpg') }}');
        }

        .animation-element {
            float: left;
        }

        .bounce-up .subject {
            -webkit-transition: all 1000ms ease-out;
            transition: all 1000ms ease-out;
            -webkit-transform: translate3d(0px, 100px, 0px);
            transform: translate3d(0px, 100px, 0px);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .bounce-up.in-view .subject {
            opacity: 1;
            -webkit-transform: translate3d(0px, 0px, 0px);
            transform: translate3d(0px, 0px, 0px);

        }

        .img-fluid {
            min-width: 100px;
            height: 300px;
        }

        .newsCard {
            position: relative;
            width: max-content;
            height: 600px;
            margin: auto;
            background-color: #fff;
            color:#fff;
            overflow: hidden;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .newsCaption {
            position: absolute;
            top: auto;
            bottom: 0;
            opacity: .6;
            left: 0;
            width: 100%;
            height: 60%;
            background-color: #000;
            padding: 15px;
            -webkit-transform: translateY(80%);
            transform: translateY(80%);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: opacity 0.1s 0.3s, -webkit-transform 0.4s;
            transition: opacity 0.1s 0.3s, -webkit-transform 0.4s;
        }

        .newsCaption-title {
            margin-top: 0;
        }

        .news-Slide-up:hover .newsCaption {
            opacity: .8;
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition: opacity 0.1s, -webkit-transform 0.4s;
            transition: transform 0.4s, opacity 0.1s, -webkit-transform 0.4s;
        }
    </style>

    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="{{ route('welcome') }}" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-black"><img class="logo" src="{{ asset('website/resources/img/logokt.jpeg') }}">INSTITUT KT SKILL</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('welcome') }}" class="nav-item nav-link active">Utama</a>
                    <a href="{{ route('about-us') }}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ route('kos') }}" class="nav-item nav-link">Kursus</a>
                    <a href="{{ route('galeri') }}" class="nav-item nav-link">Galeri</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Hubungi Kami</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="wmargin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white mb-4">Kembangkan Kemahiran Anda untuk</h1>
            <h2 class="text-white display-2 mb-9">Tingkatkan Arah Tuju Kerjaya Anda.</h2>
        </div>
        <br>
    </div>

    <!-- TentangKami -->
    <div class="container-fluid py-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-2 mb-lg-0 animation-element bounce-up cf" style="min-height: 500px;">
                    <div class="subject development" style="height: 100% !important;">
                        <div class="h-100">
                            <img class="w-100 h-100" src="{{ asset('/website/resources/img/utama.jpg') }}" style="object-fit: cover" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Tentang Kami</h6>
                            <h1 class="display-4">INSTITUT KT SKILL KUALA TERENGGANU</h1>
                        </div>
                        <p>Sebuah institusi pengajian yang telah berdaftar dengan Jabatan Pembangunan Kemahiran, Kementerian Sumber Manusia,
                            dalam menyediakan kursus pendidikan dan latihan teknikal dan vokasional (TVET) untuk para pelajar,
                            sesuai dengan standard pekerjaan yang diiktiraf, dengan penekanan kepada komponen praktikal,
                            kemahiran psikomotor dan pendedahan kepada latihan di industri.
                        </p>
                        <div class="row pt-3 mx-0">
                            <div class="col-4 px-0">
                                <div class="bg-success text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">{{$courses->count()}}</h1>
                                    <h6 class="text-uppercase text-white">Kursus<span class="d-block">Ditawarkan</span></h6>
                                </div>
                            </div>
{{--                            <div class="col-3 px-0">--}}
{{--                                <div class="bg-primary text-center p-4">--}}
{{--                                    <h1 class="text-white" data-toggle="counter-up">{{$subjects->count()}}</h1>--}}
{{--                                    <h6 class="text-uppercase text-white">Subjek<span class="d-block">Tersedia</span></h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-4 px-0">
                                <div class="bg-secondary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">{{$lecturer}}</h1>
                                    <h6 class="text-uppercase text-white">PENGAJAR<span class="d-block">BERKEMAHIRAN</span></h6>
                                </div>
                            </div>
                            <div class="col-4 px-0">
                                <div class="bg-warning text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">{{$student}}</h1>
                                    <h6 class="text-uppercase text-white">Jumlah<span class="d-block">Pelajar</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kursus -->
    <div class="container-fluid py-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title text-center position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Kursus Ditawarkan</h6>
                            <h1 class="display-4">Senarai Kursus Yang <br> Menarik Ditawarkan</h1>
                            <br>
                        </div>
                        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                            @foreach($courses as $course)
                                <div class="team-item">
                                    <img class="img-fluid w-100" src="{{$course->course_img}}">
                                    <div class="bg-light text-center p-4" style="height: 100px">
                                        <h6 class="mb-3">{{$course->name}}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sijil -->
    <div class="container-fluid py-0">
        <div class="row mx-5 py-5">
            <div class="col-lg-12 animation-element bounce-up cf">
                <div class="subject development">
                    <div class="section-title text-center position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Sijil</h6>
                        <h1 class="display-4">Senarai <br>Sijil Pentauliahan </h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    @foreach($certificates as $certificate)
                        <div class="col-4 animation-element bounce-up cf">
                            <div class="form-group">
                                <div class="subject development">
                                    <div class="newsCard news-Slide-up">
                                        <img class="img-fluid" src="{{$certificate->url_img}}" style="height: 100%;">
                                        <div class="newsCaption">
                                            <h6 class="newsCaption-title text-white text-center text-uppercase"><b>{{$certificate->name}}</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
