@extends('layouts.app', [
    'namePage' => 'Gallery / Add',
    'activePage' => 'Gallery',
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
                                    <h3 class="mb-0">Add Activity</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('gallery.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('layouts.response')

                            <!-- Gallery Information -->
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">{{ __('Activity Name') }}<span style="color: red; "> *</span></label>
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-gallery">{{ __('Upload Picture') }}<span style="color: red; "> *</span>
                                            <span class="text-red">&nbsp;(Please upload picture in vertical picture orientation only)</span></label>
                                        <label></label>
                                        <div class="custom-file">
                                            <input type="file" accept=".jpg,.jpeg,.png,.gif" name="image[]" id="image" multiple required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Add') }}</button>
                                    </div>
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
