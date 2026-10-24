@extends('layouts.app', [
    'namePage' => 'Institute / Update',
    'activePage' => 'Institute',
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
                                    <h3 class="mb-0">Edit Quantity </h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('institute.index') }}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('institute.update', ['id'=> $quantity->id]) }}" autocomplete="off">
                                @csrf
                                @method('put')

                                @include('layouts.response')

                            <!-- Course Information -->
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="quantityname">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative" value="{{$quantity->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-ic_num">{{ __('Total') }}</label>
                                        <input type="text" name="total" id="total" class="form-control form-control-alternative" value="{{$quantity->total}}"required>

                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
