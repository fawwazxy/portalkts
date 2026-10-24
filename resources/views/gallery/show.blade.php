@extends('layouts.app', [
    'namePage' => 'Gallery / View',
    'activePage' => 'Gallery',
])

@section('content')
    @include('users.partials.header')

    <style>
        .carousel-gallery {
            margin-top: 30px;
            display: flex;
            gap: 10px;
            overflow-x: scroll;
        }

        .img-gallery{
            height: 100%;
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
                                    <h3 class="mb-0">View Activity</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('layouts.response')
                            <div class="col">
                                <hr class="my-2" />
                                <h6 class="heading-small text-muted text-center">{{ __('Activity information') }}</h6>
                                <hr class="my-2"/>

                                <div class="pl-lg-4"> <br>
                                    <div>
                                        <label>Name: <b class="text-uppercase">{{$activity->name}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Created at: <b>&nbsp; {{$activity->created_at}}</b></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Last Updated: <b>&nbsp; {{$activity->updated_at}}</b></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr class="my-2" />
                                <h6 class="heading-small text-muted text-center">{{ __('Gallery attachment') }}</h6>
                                <hr class="my-2" />

                                <div class="pl-lg-2"> <br>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
@endsection
