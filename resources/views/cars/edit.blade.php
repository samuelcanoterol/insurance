@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('owners.ecar') }}</div>

                    <div class="card-body">
                        <form action="{{ route('cars.update', $car->id) }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.regnumber') }}</label>
                                <input class="form-control" type="text" name="reg_number" value="{{ $car->reg_number }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.brand') }}</label>
                                <input class="form-control" type="text" name="brand" value="{{ $car->brand }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.model') }}</label>
                                <input class="form-control" type="text" name="model" value="{{ $car->model }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.owner') }}</label>
                                <select name="owner_id" class="form-control" required>
                                    @foreach($owners as $owner)
                                        <option value="{{ $owner->id }}" {{ ($owner->id == $car->owner_id) ? 'selected' : '' }}>
                                            {{ $owner->name }} {{ $owner->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-success">{{ __('owners.ecar') }}</button>
                                <a href="{{ route('cars.index') }}" class="btn btn-secondary">{{ __('owners.cancel') }}</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
