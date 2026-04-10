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
                    <div class="card-header">{{ __('owners.eowner') }}</div> <div class="card-body">
                        <form action="{{ route('owners.update', $owner->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.name') }}</label>
                                <input class="form-control @error('name') is-invalid @enderror"
                                       type="text" name="name" value="{{ old('name', $owner->name) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.surname') }}</label>
                                <input class="form-control @error('surname') is-invalid @enderror"
                                       type="text" name="surname" value="{{ old('surname', $owner->surname) }}">
                            </div>

                            <hr>
                            <button class="btn btn-success">{{ __('owners.eowner') }}</button>
                            <a href="{{ route('owners.index') }}" class="btn btn-secondary">{{ __('owners.cancel') }}</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
