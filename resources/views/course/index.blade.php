@extends('layouts.app', [
    'namePage' => 'Course',
    'activePage' => 'Course',
])


@section('content')
    @include('users.partials.header')

    <style>
        table{
            table-layout: auto;
            max-width: 100%;
        }
    </style>

    <div class="main-content mt--8">
        <!-- Table Course -->
        <div class="container-fluid mt--5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List of Courses</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('course.add') }}" class="btn btn-sm btn-success">Add Course</a>
                                </div>
                            </div>
                        </div>
                        @include('layouts.response')

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Date of Update</th>
                                    {{--                                    <th scope="col">List of Subject</th>--}}
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-uppercase">{{$course->name}}</td>
{{--                                        <td style="white-space: normal;">--}}
{{--                                            @foreach($course->subjects as $subject)--}}
{{--                                                &diams; {{$subject->description}}<br>--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
                                        <td>{{$course->updated_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{ route('course.show', ['id'=> $course->id]) }}">View</a>
                                                    <a class="dropdown-item" href="{{ route('course.update', ['id'=> $course->id]) }}">Update</a>
                                                    <a class="dropdown-item" href="{{ route('course.destroy', ['id'=> $course->id]) }}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
