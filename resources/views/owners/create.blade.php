@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>
                                {{  $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('owners.nowners') }}</div> <div class="card-body">
                        <form action="{{ route('owners.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.name') }}</label>
                                <input class="form-control @error('name') is-invalid @enderror"
                                       type="text" name="name" value="{{ old('name') }}" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.surname') }}</label>
                                <input class="form-control @error('surname') is-invalid @enderror"
                                       type="text" name="surname" value="{{ old('surname') }}" >
                            </div>

                            <hr>
                            <button class="btn btn-success">{{ __('owners.addowner') }}</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
