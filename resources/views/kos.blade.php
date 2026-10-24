@extends('layouts.frame')

@section('content')
    <style>
        .logo {
            vertical-align: middle;
            width: 90px;
            height: auto;
        }

        .jumbotron.page-header {
            background-image: linear-gradient(rgba(40, 120, 235, 0.9), rgba(40, 120, 235, 0.9)), url('{{ asset('/website/resources/img/kursus.jpg') }}');
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

        .container:focus-within >
        .searchInputWrapper > .searchInputIcon {
            right: 0.2rem;
        }

        .img-fluid {
            min-width: 100px;
            height: 300px;
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

        .newsCard {
            position: relative;
            width: 350px;
            height: 300px;
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
            height: 90%;
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

        .newsCaption-content {
            margin: 0;
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
                    <a href="{{ route('welcome') }}" class="nav-item nav-link">Utama</a>
                    <a href="{{ route('about-us') }}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ route('kos') }}" class="nav-item nav-link active">Kursus</a>
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
            <h1 class="text-white display-1">Kursus</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('welcome') }}">Utama</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Kursus</p>
            </div>
        </div>
    </div>

    <!-- Kursus -->
    <div class="container-fluid py-0">
        <div class="container py-0">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="section-title text-center position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Kursus</h6>
                            <h1 class="display-4">Senarai Kursus Yang Menarik Ditawarkan</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 pb-4 animation-element bounce-up cf">
                    <div class="subject development">
                        <div class="newsCard news-Slide-up">
                            <img class="img-fluid" src="{{$course->course_img}}">
                                <div class="newsCaption">
                                    <h6 class="newsCaption-title text-white text-center text-uppercase"><b>{{$course->name}}</b></h6>
{{--                                    @foreach($course->subjects as $subject)--}}
{{--                                        <p class='newsCaption-content'>•{{$subject->description}}</p>--}}
{{--                                    @endforeach--}}
                                </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
