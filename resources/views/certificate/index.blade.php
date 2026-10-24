@extends('layouts.app', [
    'namePage' => 'Certificate',
    'activePage' => 'Certificate',
])


@section('content')
    @include('users.partials.header')

    <div class="main-content mt--8">
        <!-- Table Certificate -->
        <div class="container-fluid mt--5">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List of Certificate</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('certificate.add') }}" class="btn btn-sm btn-success">Add Certificate</a>
                                </div>
                            </div>
                        </div>
                        @include('layouts.response')

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Certificate Name</th>
                                    <th scope="col">Date of Update</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-capitalize">{{$certificate->name}}</td>
                                        <td>{{$certificate->updated_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{ route('certificate.show', ['id'=> $certificate->id]) }}">View</a>
                                                    <a class="dropdown-item" href="{{ route('certificate.update', ['id'=> $certificate->id]) }}">Update</a>
                                                    <a class="dropdown-item" href="{{ route('certificate.destroy', ['id'=> $certificate->id]) }}">Delete</a>
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
