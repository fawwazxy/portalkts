@extends('layouts.app', [
    'namePage' => 'Certificate / View',
    'activePage' => 'Certificate',
])

@section('content')
    @include('users.partials.header')

    <style>

        .img-gallery{
            height: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <div class="main-content mt--8">
        <div class="container-fluid mt--5">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">View Certificate</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('certificate.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('layouts.response')
                            <div class="col">
                                <hr class="my-2" />
                                <h6 class="heading-small text-muted text-center">{{ __('Certificate information') }}</h6>
                                <hr class="my-2"/>

                                <div class="pl-lg-4"> <br>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Course Name: <b class="text-uppercase">{{$certificates->name}}</b></label>
                                            </div>
                                            <div>
                                                <label>Created at: <b>&nbsp; {{$certificates->created_at}}</b></label>
                                            </div>
                                            <div>
                                                <label>Last Updated: <b>&nbsp; {{$certificates->updated_at}}</b></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <img class="img-gallery" src="{{ $certificates->url_img }}" alt="course_img" style="width: 350px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footers.auth')
@endsection
