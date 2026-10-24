@extends('layouts.app', [
    'namePage' => 'Certificate / Update',
    'activePage' => 'Certificate',
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
                                    <h3 class="mb-0">Update Certificate</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('certificate.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('certificate.update', ['id'=> $certificates->id]) }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('layouts.response')

                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">{{ __('Certificate Name') }}</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative" value="{{$certificates->name}}" required>
                                    </div>
                                    <div class="form-group{">
                                        <label class="form-control-label" for="input-ic_num">{{ __('Upload Picture') }}<span class="text-red">&nbsp;(Please upload picture in vertical picture orientation only)</span></label>
                                        <div class="custom-file">
                                            <input type="file" accept=".jpg,.jpeg,.png,.gif,.pdf" name="image" id="image" ><br><br>
                                            <img src="{{ $certificates->url_img }}" width="170px" height="170px" alt="Course image">
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                    </div>
                                    <br>
                                    <br>
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
