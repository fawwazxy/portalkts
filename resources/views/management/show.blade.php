@extends('layouts.app', [
    'namePage' => 'User Management / View',
    'activePage' => 'User Management',
])


@section('content')
    @include('users.partials.header')

    <div class="main-content mt--8">
        <div class="container-fluid mt--5">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">View User</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('management.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('layouts.response')
                            <div class="col">
                                <hr class="my-2" />
                                <h6 class="heading-small text-muted text-center">{{ __('Personal information') }}</h6>
                                <hr class="my-2"/>

                                <div class="pl-lg-4"> <br>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Name: <b class="text-uppercase">&nbsp; {{$users->name}}</b></label>
                                            </div>
                                            <div>
                                                <label>Phone Number: <b class="text-uppercase">&nbsp; {{$users->phone_no}}</b></label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div>
                                                <label>IC Number: <b class="text-uppercase">&nbsp; {{$users->ic_num}}</b></label>
                                            </div>
                                            <div>
                                                <label>Email: <b>&nbsp; {{$users->email}}</b></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr class="my-2" />
                                <h6 class="heading-small text-muted text-center">{{ __('Account information') }}</h6>
                                <hr class="my-2" />

                                <div class="pl-lg-4"> <br>
                                    <div>
                                        <label>Username: <b>&nbsp; {{$users->username}}</b></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Created at: <b>&nbsp; {{$users->created_at}}</b></label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <label>Last Updated: <b>&nbsp; {{$users->updated_at}}</b></label>
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
