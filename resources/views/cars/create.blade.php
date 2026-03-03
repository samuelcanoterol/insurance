@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">New Car</div>
                    <div class="card-body">

                        <form action="{{ route('cars.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Reg Number:</label>
                                <input class="form-control" type="text" name="reg_number" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Brand:</label>
                                <input class="form-control" type="text" name="brand" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Model:</label>
                                <input class="form-control" type="text" name="model" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Owner:</label>
                                <select name="owner_id" class="form-control" required>
                                    <option value="">Select an Owner</option>
                                    @foreach($owners as $owner)
                                        <option value="{{ $owner->id }}">
                                            {{ $owner->name }} {{ $owner->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>
                            <button class="btn btn-success">Add new Car</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
