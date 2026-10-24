@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <!-- Log Masuk -->
    <div class="container py-7">
        <div class="row justify-content-center">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-transparent pb-1">
                    <div class="text-center mt-2 mb-3" style="font-size: 30px"><b>{{ __('Log Masuk') }}</b></div>
                    <div class="text-muted text-center mt-2 mb-3"><small>{{ __('Log masuk dengan nama pengguna dan kata laluan berdaftar') }}</small></div>
                </div>
                <div class="card-body px-lg-5 py-lg-4">
                    @if($errors->has('username') || $errors->has('password'))
                        error username: {{ $errors->first('username') }}
                        error passsword: {{ $errors->first('password') }}
                    @endif
                    <form role="form" method="post" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}" type="text" name="username" required autofocus>
                            </div>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="{{ __('Kata Laluan') }}" type="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <br>
                            <input type="checkbox" onclick="myFunction()"><span class="text-muted"> Tunjuk kata laluan</span>
                        </div>
{{--                            <div class="custom-control custom-control-alternative custom-checkbox">--}}
{{--                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                <label class="custom-control-label" for="customCheckLogin">--}}
{{--                                    <span class="text-muted">{{ __('Remember me') }}</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Log Masuk') }}</button>
                        </div>
                    </form>
                </div>
            </div>
{{--                <div class="row mt-3">    --}}
{{--                    --}}{{--                    <div class="col-6">--}}
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a href="{{ route('password.request') }}" class="text-light">--}}
{{--                                <small>{{ __('Forgot password?') }}</small>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="col-6 text-right">--}}
{{--                        <a href="" class="text-light">--}}
{{--                            <small>{{ __('Create new account') }}</small>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
