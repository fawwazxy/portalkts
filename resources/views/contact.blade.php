@extends('layouts.frame')

@section('content')
    <style>
        .logo {
            vertical-align: middle;
            width: 90px;
            height: auto;
        }

        .jumbotron.page-header {
            background-image: linear-gradient(rgba(40, 120, 235, 0.9), rgba(40, 120, 235, 0.9)), url('{{ asset('/website/resources/img/hubungi.jpg') }}');
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
                    <a href="{{ route('about-us') }}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ route('kos') }}" class="nav-item nav-link">Kursus</a>
                    <a href="{{ route('galeri') }}" class="nav-item nav-link">Galeri</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link active">Hubungi Kami</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Hubungi Kami</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('welcome') }}">Utama</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Hubungi Kami</p>
            </div>
        </div>
    </div>

    <!-- Hubungi -->
    <div class="container-fluid py-0">
        <div class="container py-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title text-center position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Memerlukan Pertolongan?</h6>
                            <h1 class="display-4">Hubungi Kami</h1>
                            <br>
                            <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 600px;">
                                <div class="d-flex text-left mb-5">
                                    <div class="btn-icon bg-primary mr-4">
                                        <i class="fa-2x fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div class="mt-n1">
                                        <h4>Lokasi</h4>
                                        <p class="m-0">F18-F27 Kawasan Perindustrian Chendering,
                                            <br> 21080 Kuala Terengganu, Terengganu</p>
                                    </div>
                                </div>
                                <div class="d-flex text-left mb-5">
                                    <div class="btn-icon bg-secondary mr-4">
                                        <i class="fa-2x fas fa-phone-alt text-white"></i>
                                    </div>
                                    <div class="mt-n1">
                                        <h4>Telefon</h4>
                                        <p class="m-0">016-6198849</p>
                                    </div>
                                </div>
                                <div class="d-flex text-left mb-5">
                                    <div class="btn-icon bg-warning mr-4">
                                        <i class="fa-2x fa fa-envelope text-white"></i>
                                    </div>
                                    <div class="mt-n1">
                                        <h4>Emel</h4>
                                        <p class="m-0">ktskill@ktsi.edu.my</p>
                                    </div>
                                </div>
                                <div class="d-flex text-left">
                                    <div class="btn-icon bg-success mr-4">
                                        <i class="fa-2x fa fa-fax text-white"></i>
                                    </div>
                                    <div class="mt-n1">
                                        <h4>Faks</h4>
                                        <p class="m-0">09-6164410</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
