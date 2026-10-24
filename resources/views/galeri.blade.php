@extends('layouts.frame')

@section('content')
    <style>
        .logo {
            vertical-align: middle;
            width: 90px;
            height: auto;
        }

        .jumbotron.page-header {
            background-image: linear-gradient(rgba(40, 120, 235, 0.9), rgba(40, 120, 235, 0.9)), url('{{ asset('/website/resources/img/galleri.jpeg') }}');
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

        details {
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.16) 0 10px 36px 0,
            rgba(0, 0, 0, 0.06) 0 0 0 1px;
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        summary {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            cursor: pointer;
            list-style-type: none;
            background: #ECF4FF;

        }

        summary,
        .details-info {
            padding: 1rem;
        }

        .details-info {
            border-top: 2px solid #2878EB;
        }

        summary .icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            transition: transform 0.26s;
        }

        details[open] summary .icon {
            transform: rotate(180deg);
        }

        .container {
            max-width: 100rem;
            margin: 0 auto;
            padding: 0 2rem 2rem;
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
                    <a href="{{ route('galeri') }}" class="nav-item nav-link active">Galeri</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Hubungi Kami</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Galeri</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('welcome') }}">Utama</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Galeri</p>
            </div>
        </div>
    </div>

    <!-- Galleri -->
    <div class="container-fluid py-0">
        <div class="row mx-5 py-5">
            <div class="col-lg-12 animation-element bounce-up cf">
                <div class="subject development">
                    <div class="section-title text-center position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Galeri</h6>
                        <h1 class="display-4">Senarai Aktiviti <br>Menarik Dijalankan</h1>
                        <br>
                    </div>
                    @foreach($activities as $activity)
                        <details>
                            <summary>
                                <b>{{$activity->name}}</b>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </summary>
                            <div class="details-info">
                                <div class="row ">
                                    @foreach($activity->galleries as $gallery)
                                        <div class="col-lg-4 col-md-6 pb-4 animation-element bounce-up cf">
                                            <div class="subject development">
                                                <div class="newsCard news-Slide-up">
                                                    <img class="img-fluid" src="{{$gallery->url_img}}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </details>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
