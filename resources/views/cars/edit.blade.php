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
                    <div class="card-header">{{ __('owners.ecar') }}</div>

                    <div class="card-body">
                        <form action="{{ route('cars.update', $car->id) }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.regnumber') }}</label>
                                <input class="form-control @error('reg_number') is-invalid @enderror"
                                       type="text" name="reg_number" value="{{ old('reg_number', $car->reg_number) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.brand') }}</label>
                                <input class="form-control @error('brand') is-invalid @enderror"
                                       type="text" name="brand" value="{{ old('brand', $car->brand) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.model') }}</label>
                                <input class="form-control @error('model') is-invalid @enderror"
                                       type="text" name="model" value="{{ old('model', $car->model) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('owners.owner') }}</label>
                                <select name="owner_id" class="form-control @error('owner_id') is-invalid @enderror">
                                    @foreach($owners as $owner)
                                        <option value="{{ $owner->id }}"
                                            {{ old('owner_id', $car->owner_id) == $owner->id ? 'selected' : '' }}>
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
