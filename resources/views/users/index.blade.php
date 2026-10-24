@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'activePage' => 'Dashboard',
])

@section('content')
    @include('users.partials.header')

    <div class="main-content">
        <!-- 4 cards -->
        <div class="header pb-8 pt-5 pt-md-2 mt--9">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Courses <br>Offered</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$courses->count()}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="ni ni-paper-diploma"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-xl-3 col-lg-6">--}}
{{--                            <div class="card card-stats mb-4 mb-xl-0">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col">--}}
{{--                                            <h5 class="card-title text-uppercase text-muted mb-0">Subject <br>Available</h5>--}}
{{--                                            <span class="h2 font-weight-bold mb-0">{{$subjects->count()}}</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-auto">--}}
{{--                                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">--}}
{{--                                                <i class="ni ni-books"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Skill <br>Instructors</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$lecturer}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                <i class="ni ni-ruler-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Students <br>Enrolled</h5>
                                            <span class="h2 font-weight-bold mb-0">{{$student}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="ni ni-hat-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Admin -->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">List of Users</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone No</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-capitalize">{{$user->name}}</td>
                                                <td>{{$user->phone_no}}</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection




{{--<html lang="en"><head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}

{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>INSTITUT KT SKILL</title>--}}
{{--    <!-- Favicon -->--}}
{{--    <link href="{{ asset('website/resources/img/logokt.jpeg') }}" rel="icon" type="image/png">--}}
{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">--}}
{{--    <!-- Icons -->--}}
{{--    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">--}}
{{--    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">--}}
{{--    <!-- Argon CSS -->--}}
{{--    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">--}}
{{--    </head>--}}

{{--    <div class="clickup-chrome-ext_installed">--}}
{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}

{{--        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">--}}
{{--            <div class="container-fluid">--}}
{{--                <!-- Toggler -->--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <!-- Logo -->--}}
{{--                <a class="navbar-brand pt-0" href="{{ route('home') }}">--}}
{{--                    <img src="{{ asset('website/resources/img/logokt.jpeg') }}" class="navbar-brand-img">--}}
{{--                </a>--}}
{{--                <hr class="my--4">--}}

{{--                <!-- Collapse -->--}}
{{--                <div class="collapse navbar-collapse" id="sidenav-collapse-main">--}}
{{--                    <!-- Navigation Bar -->--}}
{{--                    <hr class="my-3">--}}
{{--                    <ul class="navbar-nav">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" href="{{ route('home') }}">--}}
{{--                                <i class="ni ni-planet text-red"></i> {{ __('Dashboard') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('profile.edit') }}">--}}
{{--                                <i class="ni ni-badge text-red"></i> {{ __('My profile') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <br>--}}

{{--                        <h4><b>&nbsp&nbsp&nbsp&nbspMENU</b></h4>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('course.index') }}">--}}
{{--                                <i class="ni ni-single-copy-04 text-blue"></i> {{ __('Course') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="">--}}
{{--                                <i class="ni ni-map-big text-blue"></i> {{ __('Institute') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="">--}}
{{--                                <i class="ni ni-camera-compact text-blue"></i> {{ __('Gallery') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="">--}}
{{--                                <i class="ni ni-single-02 text-blue"></i> {{ __('User Management') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('icons') }}">--}}
{{--                                <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('table') }}">--}}
{{--                                <i class="ni ni-bullet-list-67 text-default"></i>--}}
{{--                                <span class="nav-link-text">Tables</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <div class="main-content">--}}
{{--                <!-- Top navbar -->--}}
{{--            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">--}}
{{--                <div class="container-fluid">--}}

{{--                    <!-- Page Name -->--}}
{{--                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Dashboard</a>--}}

{{--                    <!-- User Logout-->--}}
{{--                    <ul class="navbar-nav align-items-center d-none d-md-flex">--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <div class="media align-items-center">--}}
{{--                                    <span class="avatar avatar-sm rounded-circle">--}}
{{--                                        <img alt="Image placeholder" src="{{ asset('argon/img/theme/profile.png') }}">--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">--}}
{{--                                <div class=" dropdown-header noti-title">--}}
{{--                                    <h6 class="text-overflow m-0">Welcome!</h6>--}}
{{--                                </div>--}}
{{--                                <a href="{{ route('profile.edit') }}" class="dropdown-item">--}}
{{--                                    <i class="ni ni-single-02"></i>--}}
{{--                                    <span>My profile</span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();">--}}
{{--                                    <i class="ni ni-user-run"></i>--}}
{{--                                    <span>Logout</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}

{{--            <!-- 4 cards -->--}}
{{--            <div class="header bg-gradient-default pb-8 pt-5 pt-md-8">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="header-body">--}}
{{--                        <!-- Card stats -->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-3 col-lg-6">--}}
{{--                                <div class="card card-stats mb-4 mb-xl-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <h5 class="card-title text-uppercase text-muted mb-0">Kursus Ditawarkan</h5>--}}
{{--                                                <span class="h2 font-weight-bold mb-0">5</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">--}}
{{--                                                    <i class="ni ni-paper-diploma"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-lg-6">--}}
{{--                                <div class="card card-stats mb-4 mb-xl-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <h5 class="card-title text-uppercase text-muted mb-0">Subjek <br>Tersedia</h5>--}}
{{--                                                <span class="h2 font-weight-bold mb-0">9</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">--}}
{{--                                                    <i class="ni ni-books"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-lg-6">--}}
{{--                                <div class="card card-stats mb-4 mb-xl-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <h5 class="card-title text-uppercase text-muted mb-0">Pengajar Kemahiran</h5>--}}
{{--                                                <span class="h2 font-weight-bold mb-0">24</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">--}}
{{--                                                    <i class="ni ni-ruler-pencil"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-lg-6">--}}
{{--                                <div class="card card-stats mb-4 mb-xl-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah <br>Pelajar</h5>--}}
{{--                                                <span class="h2 font-weight-bold mb-0">2182</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">--}}
{{--                                                    <i class="ni ni-hat-3"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Table Admin -->--}}
{{--            <div class="container-fluid mt--7">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="card shadow">--}}
{{--                            <div class="card-header border-0">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-8">--}}
{{--                                        <h3 class="mb-0">Users</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4 text-right">--}}
{{--                                        <a href="" class="btn btn-sm btn-primary">Add user</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}

{{--                            </div>--}}

{{--                            <div class="table-responsive">--}}
{{--                                <table class="table align-items-center table-flush">--}}
{{--                                    <thead class="thead-light">--}}
{{--                                        <tr>--}}
{{--                                            <th scope="col">Name</th>--}}
{{--                                            <th scope="col">Email</th>--}}
{{--                                            <th scope="col">Creation Date</th>--}}
{{--                                            <th scope="col"></th>--}}
{{--                                        </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>Admin</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="mailto:admin@argon.com">admin@argon.com</a>--}}
{{--                                            </td>--}}
{{--                                            <td>12/02/2020 11:00</td>--}}
{{--                                            <td class="text-right">--}}
{{--                                                <div class="dropdown">--}}
{{--                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                        <i class="fas fa-ellipsis-v"></i>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">--}}
{{--                                                        <a class="dropdown-item" href="">Edit</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                    </tr>--}}
{{--                                     </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer py-4">--}}
{{--                                <nav class="d-flex justify-content-end" aria-label="...">--}}

{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @include('layouts.footers.auth')--}}

{{--    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>--}}
{{--        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <!-- Argon JS -->--}}
{{--    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>--}}
{{--</html>--}}

