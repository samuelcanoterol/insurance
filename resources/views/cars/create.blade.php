@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('owners.ncar') }}</div>
                    <div class="card-body">

                        <form action="{{ route('cars.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.regnumber') }}</label>
                                <input class="form-control" type="text" name="reg_number" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.brand') }}</label>
                                <input class="form-control" type="text" name="brand" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.model') }}</label>
                                <input class="form-control" type="text" name="model" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.owner') }}</label>
                                <select name="owner_id" class="form-control" required>
                                    <option value="">{{ __('owners.sowner') }}</option>
                                    @foreach($owners as $owner)
                                        <option value="{{ $owner->id }}">
                                            {{ $owner->name }} {{ $owner->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>
                            <button class="btn btn-success">{{ __('owners.addcar') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
