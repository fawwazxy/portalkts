<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>INSTITUT KT SKILL</title>
        <!-- Favicon -->
        <link href="{{ asset('website/resources/img/logokt.jpeg') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon/css/argon.css?v=1.0.0') }}" rel="stylesheet">
        <!-- SweetAlert -->
        <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
        <script src="{{ asset('sweetalert2/sweetalert2.all.min.js') }}"></script>
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')
{{--            <div class="wrapper wrapper-full-page">--}}
{{--                <div class="full-page {{ $contentClass ?? '' }}" style="background-image: {{ 'url('.asset('/website/resources/img/mesin.jpg').')'}};">--}}
{{--                    <div class="content">--}}
{{--                        <div class="container">--}}
{{--                            @yield('content')--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
            @yield('content')
        </div>

{{--        @guest()--}}
{{--            @include('layouts.footers.guest')--}}
{{--        @endguest--}}

        <script src="{{ asset('argon/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>


        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon/js/argon.js?v=1.0.0') }}"></script>

    @yield('custom-script')
    </body>
</html>
