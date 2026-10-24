@extends('layouts.app', [
    'namePage' => 'Gallery',
    'activePage' => 'Gallery',
])


@section('content')
    @include('users.partials.header')

    <div class="main-content mt--8">
        <!-- Table Gallery -->
        <div class="container-fluid mt--5">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List of Activity</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('gallery.add') }}" class="btn btn-sm btn-success">Add Activity</a>
                                </div>
                            </div>
                        </div>
                        @include('layouts.response')

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Activity Name</th>
                                    <th scope="col">Date of Update</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-capitalize">{{$activity->name}}</td>
                                        <td>{{$activity->updated_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{ route('gallery.show', ['id'=> $activity->id]) }}">View</a>
                                                    <a class="dropdown-item" href="{{ route('gallery.update', ['id'=> $activity->id]) }}">Update</a>
                                                    <a class="dropdown-item" href="{{ route('gallery.destroy', ['id'=> $activity->id]) }}">Delete</a>
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
