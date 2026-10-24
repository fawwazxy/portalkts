@extends('layouts.app', [
    'namePage' => 'Gallery / Update',
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
                                    <h3 class="mb-0">Update Activity</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('gallery.update',['id'=> $activity->id]) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('layouts.response')

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">{{ __('Activity Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-alternative" value="{{$activity->name}}" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                </div>
                                <br>
                                <br>
                            </div>
                        </form>
                        <div class="pl-lg-4">
                            <div class="form-group" id="galleryInput">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <label class="form-control-label" for="input-gallery">{{ __('List of Picture') }}</label>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-default" data-toggle="modal" data-target="#addGallery">Upload Picture</button>
                                    </div>
                                </div>
                                <br>
                                <table class="table table-bordered" >
                                    <tr>
                                        <th>Picture</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>

                                    @foreach($activity->galleries as $gallery)

                                        @csrf
                                        @method('put')
                                        <tr>
                                            <td>
                                                    <img src="{{ $gallery->url_img }}" width="170px" height="170px" alt="Course image">
                                            </td>
                                            <td>
                                                <div class="col-md-4">
                                                    <span class="btn btn-danger galleryDelete" id="galleryDelete{{ $loop->iteration }}" data-id="{{ $gallery->id}}">
                                                    <i class="fas fa-trash"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addGallery" tabindex="-1" role="dialog" aria-labelledby="addGalleryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGalleryLabel">Add New Picture for {{$activity->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body align-content-center">
                    <form action="{{ route('picture.store', ['activity_id' => $activity->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-control-label" for="input-gallery">{{ __('Upload Picture ') }}<span class="text-red">&nbsp;(Please upload picture in vertical picture orientation only)</span></label>
                                <div class="custom-file">
                                    <input type="file" accept=".jpg,.jpeg,.png,.gif,.pdf" name="image[]" id="image" multiple required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection

@section('custom-script')
    <!-- JavaScript -->
    <script>

        $(document).on('click', '.galleryDelete', function (e) {
            e.preventDefault();
            let id = $(this).data('id');

            Swal.fire({
                title: "Confirm Delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Delete!',
                confirmButtonColor: '#E71C1C',
            })
                .then((value) => {
                    if (value.isConfirmed) {
                        location.href = "/picture/destroy/"+id;
                    }
                });
        });
    </script>
@endsection


