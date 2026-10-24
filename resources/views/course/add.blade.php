@extends('layouts.app', [
    'namePage' => 'Course / Add',
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
                                    <h3 class="mb-0">Add Course</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('course.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('course.store') }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('layouts.response')

                                <!-- Course Information -->
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">{{ __('Course Name') }}<span style="color: red; "> *</span></label>
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative" required>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-control-label" for="input-subject">{{ __('List of Subject') }}<span style="color: red; "> *</span></label>--}}
{{--                                        <table class="table table-bordered" id="dynamicAddRemove">--}}
{{--                                            <tr>--}}
{{--                                                <th>Subject</th>--}}
{{--                                                <th style="width: 20px">Action</th>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><input type="text" name="description[]" placeholder="Enter Code and Subject Name" class="form-control" required /></td>--}}
{{--                                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-default">Add Subject</button></td>--}}
{{--                                            </tr>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-pic">{{ __('Upload Picture') }}<span style="color: red; "> </span></label>
                                        <div class="custom-file">
                                            <input type="file" accept=".jpg,.jpeg,.png,.gif" name="image" id="image">
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

{{--@section('custom-script')--}}
{{--    <!-- JavaScript -->--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        var i = 0;--}}
{{--        $("#dynamic-ar").click(function () {--}}
{{--            ++i;--}}
{{--            $("#dynamicAddRemove").append('<tr><td><input type="text" name="description[]" placeholder="Enter Code and Subject Name" class="form-control" /></td>' +--}}
{{--                '<td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'--}}
{{--            );--}}
{{--        });--}}
{{--        $(document).on('click', '.remove-input-field', function () {--}}
{{--            $(this).parents('tr').remove();--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
