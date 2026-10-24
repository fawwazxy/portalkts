@extends('layouts.app', [
    'namePage' => 'User Management / Update',
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
                                    <h3 class="mb-0">Update User</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('management.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('management.update', ['id'=> $user->id]) }}" autocomplete="off">
                                @csrf
                                @method('put')

                                @include('layouts.response')

                                <div class="row">
                                    <div class="col-xl-6">
                                        <h6 class="heading-small text-muted mb-4">{{ __('Personal information') }}</h6>

                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                                <input type="text" name="name" id="name" class="form-control form-control-alternative" value="{{$user->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-ic_num">{{ __('IC Number') }}</label>
                                                <input type="text" name="ic_num" id="ic_num" class="form-control form-control-alternative" value="{{$user->ic_num}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-phone_no">{{ __('Phone Number') }}</label>
                                                <input type="text" name="phone_no" id="phone_no" class="form-control form-control-alternative" value="{{$user->phone_no}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                                <input type="email" name="email" id="email" class="form-control form-control-alternative" value="{{$user->email}}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <h6 class="heading-small text-muted mb-4">{{ __('Account information') }}</h6>

                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">{{ __('Username') }}</label>
                                                <input type="text" name="username" id="username" class="form-control form-control-alternative" value="{{$user->username}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
