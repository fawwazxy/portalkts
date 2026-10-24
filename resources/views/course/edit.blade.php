@extends('layouts.app', [
    'namePage' => 'Course / Update',
    'activePage' => 'Course',
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
                                    <h3 class="mb-0">Update Course</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('course.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('course.update', ['id'=> $courses->id]) }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('layouts.response')

                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">{{ __('Course Name') }}</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative" value="{{$courses->name}}" required>
                                    </div>
                                    <div class="form-group{">
                                        <label class="form-control-label" for="input-ic_num">{{ __('Upload Picture') }}</label>
                                        <div class="custom-file">
                                            <input type="file" accept=".jpg,.jpeg,.png,.gif,.pdf" name="image" id="image" ><br><br>
                                            <img src="{{ $courses->course_img }}" width="170px" height="170px" alt="Course image">
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
{{--                            <div class="pl-lg-4">--}}
{{--                                <div class="form-group" id="subjectInput">--}}
{{--                                    <div class="row align-items-center">--}}
{{--                                        <div class="col-8">--}}
{{--                                            <label class="form-control-label" for="input-subject">{{ __('List of Subject') }}</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-4 text-right">--}}
{{--                                            <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-default" data-toggle="modal" data-target="#addSubject">Add Subject</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                    <table class="table table-bordered" >--}}
{{--                                        <tr>--}}
{{--                                            <th>Subject</th>--}}
{{--                                            <th style="width: 20px">Action</th>--}}
{{--                                        </tr>--}}

{{--                                        @foreach($courses->subjects as $subject)--}}

{{--                                            <form action="{{ route('subject.update', ['id' => $subject->id]) }}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('put')--}}
{{--                                            <tr>--}}
{{--                                                <td><input type="text" name="description" placeholder="Enter subject"--}}
{{--                                                           class="form-control form-control-alternative subjectName" id="subjectName{{ $loop->iteration }}" value="{{$subject->description}}" disabled />--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <span class="btn btn-info subjectEdit" id="subjectEdit{{ $loop->iteration }}" data-count="{{ $loop->iteration }}">--}}
{{--                                                            <i class="fas fa-edit"></i></span>--}}
{{--                                                        <span class="btn btn-danger subjectDelete" id="subjectDelete{{ $loop->iteration }}" data-id="{{ $subject->id}}" data-message="{{ $subject->description}}">--}}
{{--                                                            <i class="fas fa-trash"></i></span>--}}
{{--                                                        <button class="btn btn-success d-none subjectSubmit" id="subjectSubmit{{ $loop->iteration }}" type="submit">Update</button>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            </form>--}}
{{--                                        @endforeach--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="addSubjectLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="addSubjectLabel">Add New Subject for {{$courses->name}}</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body align-content-center">--}}
{{--                    <form action="{{ route('subject.store', ['course_id' => $courses->id]) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('put')--}}
{{--                        <div class="row" id="subjectInput">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="text" name="description" class="form-control form-control-alternative subjectInput"--}}
{{--                                          id="description" value="" placeholder="Enter Code and Subject Name">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-3">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <button type="submit" class="btn btn-success btn-block">Save</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    @include('layouts.footers.auth')
@endsection

{{--@section('custom-script')--}}
{{--    <!-- JavaScript -->--}}
{{--    <script>--}}
{{--        $(document).on('click','.subjectEdit',function(){--}}
{{--            let count = $(this).data('count');--}}
{{--            $('.subjectName').attr('disabled', true);--}}
{{--            $('.subjectEdit, .subjectDelete').removeClass('d-none');--}}
{{--            $('.subjectSubmit').addClass('d-none');--}}

{{--            $('#subjectEdit'+count+', #subjectDelete'+count).addClass('d-none');--}}
{{--            $('#subjectName'+count).attr('disabled', false);--}}
{{--            $('#subjectSubmit'+count).removeClass('d-none');--}}
{{--        });--}}

{{--        //--}}
{{--        $(document).on('click', '.subjectDelete', function (e) {--}}
{{--            e.preventDefault();--}}
{{--            let id = $(this).data('id');--}}
{{--            let message = $(this).data('message')--}}

{{--            Swal.fire({--}}
{{--                title: "Confirm Delete?",--}}
{{--                text: message,--}}
{{--                icon: "warning",--}}
{{--                showCancelButton: true,--}}
{{--                confirmButtonText: 'Delete!',--}}
{{--                confirmButtonColor: '#E71C1C',--}}
{{--            })--}}
{{--                .then((value) => {--}}
{{--                    if (value.isConfirmed) {--}}
{{--                        location.href = "/subject/destroy/"+id;--}}
{{--                    }--}}
{{--                });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
