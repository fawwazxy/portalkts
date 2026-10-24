@extends('layouts.frame')

@section('content')
    <style>
        .logo {
            vertical-align: middle;
            width: 90px;
            height: auto;
        }

        .jumbotron.page-header {
            background-image: linear-gradient(rgba(40, 120, 235, 0.9), rgba(40, 120, 235, 0.9)), url('{{ asset('/website/resources/img/tentang.jpg') }}');
        }

        .searchInputWrapper {
            position: relative;
        }

        .searchInput {
            width: 30rem;
            height: 3rem;
            padding: 0 1rem;
            border-radius: 5rem;
            border: none;
            transition: transform 0.1s ease-in-out;
        }

        ::placeholder {
            color: #a1a1a1;
        }

        /* hide the placeholder text on focus */
        :focus::placeholder {
            text-indent: -999px
        }

        .searchInput:focus {
            outline: none;
            transform: scale(1.1);
            transition: all 0.1s ease-in-out;
        }

        .searchInputIcon {
            position: absolute;
            right: 1.2rem;
            top: 1rem;
            color: #a1a1a1;
            transition: all 0.1s ease-in-out;
        }

        .container:focus-within >
        .searchInputWrapper > .searchInputIcon {
            right: 0.2rem;
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

        .card{
            height: auto;
            width: 400px;
            border-radius: 10px;
            padding: 50px;
            background: #F0F7FF;
            transition: 0.4s all ease-in-out;
            box-shadow: -1px 1px 3px 1px rgba(0, 0, 0, 0.1);
            margin-left: 110px;
        }

        .card:hover {
            box-shadow: -4px 4px 6px 2px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            font-weight: 600;
        }

        .card-text {
            margin-top: 10px;
            line-height: 2.0;
        }

        picture {
            display: flex;
            overflow: hidden;
            border-radius: 1em;
            width: 600px;
            height: 500px;
            box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.5);
            -webkit-tap-highlight-color: transparent;
            transition: 0.4s all ease-in-out;

        }

        picture:hover {
            box-shadow: -4px 4px 6px 2px rgba(0, 0, 0, 0.3);
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
                    <a href="{{ route('welcome') }}" class="nav-item nav-link">Utama</a>
                    <a href="{{ route('about-us') }}" class="nav-item nav-link active">Tentang Kami</a>
                    <a href="{{ route('kos') }}" class="nav-item nav-link">Kursus</a>
                    <a href="{{ route('galeri') }}" class="nav-item nav-link">Galeri</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Hubungi Kami</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Tentang Kami</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('welcome') }}">Utama</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Tentang Kami</p>
            </div>
        </div>
    </div>

    <!-- VisiMisi -->
    <div class="container-fluid py-0">
        <div class="container py-0">
            <div class="row justify-content-center">
                <div class="col-lg-12 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title text-center position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Visi Dan Misi</h6>
                            <h1 class="display-4">Visi & Misi <br>Institut KT Skill </h1>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-4 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="card">
                            <div class="card-title">Visi</div>
                            <div class="card-text">
                                Mempertingkatkan keilmuan dan kepakaran dalam bidang
                                kemahiran melalui program latihan yang kompeten, terkini dan
                                berlandaskan kepada nilai-nilai murni serta profesional.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-4 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="card">
                            <div class="card-title">Misi</div>
                            <div class="card-text">
                                Menjadikan INSTITUT KT SKILL sebagai Pusat Kemahiran yang cemerlang
                                dan unggul dalam melahirkan golongan tenaga mahir yang berdaya saing,
                                berketerampilan, berwawasan dan beretika.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carta -->
    <div class="container-fluid py-5">
        <div class="container py-0">
            <div class="row justify-content-center">
                <div class="col-lg-12 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title text-center position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Carta</h6>
                            <h1 class="display-4">Carta Organisasi <br>Institut KT Skill </h1>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto animation-element bounce-up cf">
                    <div class="subject development">
                        <picture>
                            <img src="{{ asset('/website/resources/img/carta.jpg') }}" style="width: 600px; height: 500px">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
